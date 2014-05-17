<?php
class Login extends CI_Controller
{
 
    public function __construct()
    {
    parent:: __construct();
    $this->load->model('login_model');
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->library('session'); // necesario poner encryption key en config.php
   
    }
   
    public function index()
    {
 
   
        if(!isset($_POST['username']))  //isset permite determinar si una variable ha sido seteada(creada... iniciada...)
        {
        $this->load->view('login'); //si no recibimos datos por post, cargamos la vista del formulario
        }
        else
        {
        //definimos las reglas de validación
       
        $this->form_validation->set_rules('username','Usuario','required|min_lenght[5]|max_lenght[20]');
        $this->form_validation->set_rules('password','Password','required');
       
            if($this->form_validation->run() == FALSE) //si no supera las reglas de validación se recarga la vista del formulario
            {
            $this->load->view('login');
            }
            else
            {
            $isValidLogin = $this->login_model->getLogin($_POST['username'],$_POST['password']); //pasamos los valores al modelo para que compruebe si existe el usuario con ese password
           
                if($isValidLogin)
                {
                // si existe el usuario, registramos las variables de sesión y abrimos la página de exito
               
//                    $sesion_data = array(
//                                    'username' => $_POST['username'],
//                                    'password' => $_POST['password']
//                                        );
                     $sesion_data = $isValidLogin[0];
                    $this->session->set_userdata($sesion_data);
               
                $data['username'] = $this->session->userdata['username'];
                $data['password'] = $this->session->userdata['password'];
                $data['nombre'] = $this->session->userdata['nombre'];
                $data['tipo'] = $this->session->userdata['tipo'];
                // consulta a la bd por select * from usuarios
                $data['datos'] = $this->login_model->showDb();
                   
                $this->load->view('login_success',$data);
                }
                else
                {
                // si es erroneo, devolvemos un mensaje de error
                $this->load->view('login_error');
                }
            }
       
       
        }
       
       
    }
    
    public function borrar($id)
    {
        $this->login_model->borrarUsuario($id);
        echo "borrado con exito";
    }


    
   
 
    public function data()
    {
        if($this->session->userdata['username'] == TRUE)
        {
        echo $this->session->userdata['username'];
        echo "<br>";
        echo $this->session->userdata['password'];
        }
    }
   
   
    public function destroy()
    {
    //destruimos la sesión
    $this->login_model->close();
 
        echo "Sesión borrada"."<br>";
        echo "<a href=".  base_url()."Login>Volver inicio</a>";
       
 
    }
   
   
    public function perfil()
    {
    //pagina restringida a usuarios registrados.
    $logged = $this->login_model->isLogged();
       
        if($logged == TRUE)
        {
        echo "Tienes permiso para ver el contenido privado";
        }
        else
        {
        //si no tiene permiso, abrimos el formulario para loguearse
        $this->load->view('login');
        }
    }
    
    
   
   
 
   
 
}
?>
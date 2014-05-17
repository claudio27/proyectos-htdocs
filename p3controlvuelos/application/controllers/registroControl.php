<?php

class RegistroControl extends CI_Controller{
    
     
    public function __construct() {
        parent:: __construct();
        $this->load->model('login_model');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
    }



    public function index() {
        
        if (!isset($_POST['username'])) {  
            $this->load->view('registroV'); 
        } else { 
            
              //definimos las reglas de validación
       
        $this->form_validation->set_rules('username','Usuario','required|min_length[5]|max_length[20]');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('nombre','Nombre','required');
        $this->form_validation->set_rules('rut','Rut','required|min_length[8]|max_length[9]');
        $this->form_validation->set_rules('direccion','Direccion','required');
        
        
            if($this->form_validation->run() == FALSE) //si no supera las reglas de validación se recarga la vista del formulario
            {
            $this->load->view('registroV');
            }else{
                // creamos el arreglo con los datos
                        $data = array(    'Login' => $_POST['username'] ,
                          'Pass' => $_POST['password'] ,
                          'Nombre' => $_POST['nombre'],
                          'Tipo' => 2,
                          'Rut' => $_POST['rut'],
                          'Direccion' => $_POST['direccion']
);
                
                
                $this->login_model->inserta($data);
    
                echo "Registro Guardado - <a href=".  base_url()."login>Volver</a> ";
                // @todo poner vista para mostrar registro guardado
            }
      
   
        
            
           
        }
    }
    
  

  

}
?>

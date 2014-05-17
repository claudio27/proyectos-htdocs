<?php

class Login extends CI_Controller {

    /** En este constructor activamos (leemos) los elementos que usaremos, por ejemplo 
     * form y session son propios de codeigniter en cambio login_model es creado para este ejercicio */
    public function __construct() {
        parent:: __construct();
        $this->load->model('login_model');
        $this->load->model('vuelos_model');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    /* La función index es la primera que se ejecuta cuando llamo al controlador (Login) */

    public function index() {
        if (!isset($_POST['username'])) {  //isset permite determinar si una variable ha sido seteada(creada... iniciada...), para este caso pregunta psi NO                               // ha sido cargada la variable username que viene por método post desde otra parte
            $this->load->view('loginV'); //si no recibimos datos por post, cargamos la vista del formulario
        } else {   //si la variable username llegó por método post usamos la funcion getLogin que está creada en el modelo, por eso debemos indicar
            // en el constructor que usaremos el modelo (login_model)
            $isValidLogin = $this->login_model->getLogin($_POST['username'], $_POST['password']); //pasamos los valores al modelo para que compruebe si existe el usuario con ese password
            //recordemos que esta función retorna un arreglo bidimiensional con todos los que cumplan
            //con ese nombre y password, de lo contrario retorna un false

            if ($isValidLogin) {
                // si el usuario es encontrado guardo el primero de ellos (1ra fila)

                $sesion_data = $isValidLogin[0];

                // Las session en php se usan como variables que permanecen activas durante toda una sesion independiente las páginas en que se mueva, 
                // por esto nos permite entre otras cosas determinar si un usuario se ha logeado correctamente, es por eso que como el usuario se encontró
                // guardaremos sus datos como variables de session.				
                $this->session->set_userdata($sesion_data);  //Al elemento session de codeigniter le cargo los datos de la variable $session_data
                //Con esto quedan creadas algunas variables de session
                //En el siguiente bloque usaremos las variables de session para depositarlas en un nuevo arreglo ($data)
                $data['Login'] = $this->session->userdata['Login'];  //recordemos que las variables de session se crearon con un registr de la tabla
                $data['Nombre'] = $this->session->userdata['Nombre'];      //usuario, es por eso que cada campo representa a una variable.
                $data['Tipo'] = $this->session->userdata['Tipo'];          // por ejemplo aquí el campo tipo se está guardando en $data

                $data['idUsuario'] = $this->session->userdata['Id_usuario'];

                $data['datos'] = $this->login_model->getTabla();       //Para este caso uso la función getTabla del modelo que retorna toda la información
                // y quedará guardada como arreglo en 'datos' dentro de $data
                $data['destinos'] = $this->login_model->destinos();

                // datos necesario para el la vista de administrador

                $data['fechas'] = $this->vuelos_model->fechas();
                $data['destinos'] = $this->vuelos_model->destinos();
                $data['horas'] = $this->vuelos_model->horas();
                $data['ruts'] = $this->vuelos_model->ruts();

                if ($data['Tipo'] == 1) {

                    $this->load->view('informesV', $data);
                } else {
                    $this->load->view('seleccionVueloV', $data);
                }





//                $this->load->view('login_success', $data);   //En esta instrucción además de cargar la vista 'login_success' le enviamos 
                //un paquete con información ($data), este paquete al llegar a destino se descompone en variables
                //independientes, es decir, se usarán en destino las variables $username,$nombre,$tipo y $datos. 
            } else {
                // si es erroneo, devolvemos un mensaje de error (una vista de error)
                $this->load->view('login_error');
            }
        }
    }

    /* Esta función es un ejemplo de como cerrar una session */

    public function destroy() {
        //destruimos la sesión
        $this->login_model->close();

        echo "Salida Existosa" . "<br>";
        echo "<a href=\"" . base_url() . "login\">Volver</a>";
    }

    /* Esta función es un ejemplo de como validar que un usuario esté logeado */

    public function perfil() {
        //pagina restringida a usuarios registrados.
        $logged = $this->login_model->isLogged();

        if ($logged == TRUE) {
            echo "Tienes permiso para ver el contenido privado";
        } else {
            //si no tiene permiso, abrimos el formulario para loguearse
            $this->load->view('loginV');
        }
    }

    public function registro() {

        $this->load->view('registroV');
    }

}

?>

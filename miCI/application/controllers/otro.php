<?php   //Este controlador está creado para demostrar el como funcionan las sesiones
class otro extends CI_Controller
{
 
    public function __construct()
    {
    parent:: __construct();
	  $this->load->model('login_model');
    }
   
    public function index()
    {
	   if($this->login_model->isLogged())   //Aquí uso la función isLogged()  del modelo que me indica si el usuario ha sido logeado
	     {
          $this->load->view('algo');        // si está correctamente logeado mostrará la vista indicada (algo)
	      }
	   else
         {redirect('Login','refresh');}	   // de lo contrario se redirige al controlador de inicio
		 
		 
	   
       // para comprobar podemos intentar ingresar por la URL http://localhost/miCI/otro y si no se ha logeado... no debrá entrar
    }
   
   
   
 
}
?>
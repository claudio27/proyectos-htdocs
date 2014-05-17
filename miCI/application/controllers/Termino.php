<?php
class termino extends CI_Controller
{
 
    public function __construct()
    {
    parent:: __construct();
    $this->load->model('login_model');
    }
   
    public function index()
    {
       $this->login_model->close();  //Este controlador usa la función del modelo (login_model) para cerrar la sesion actual
	   
	                                //luego redirecciona la controlador de inicio
	   
       redirect('/Login','refresh');
       
    }
   
   
   
 
}
?>
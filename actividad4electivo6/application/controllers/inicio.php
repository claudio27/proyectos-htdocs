<?php
class Inicio extends CI_Controller {
   function __construct()
   {
      parent::__construct();
   }
   function index()
   {
      echo "Partiendo con CodeIgniter...";
	  $this->load->view('miVista');
   }
   
   function saludo($nom)
   {
      echo "<h1> Hola ".$nom."</h1>";
   }
   
}
?>

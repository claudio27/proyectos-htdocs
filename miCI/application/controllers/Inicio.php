<?php
class Inicio extends CI_Controller {
   function __construct()
   {
      parent::__construct();
   }
   function index()
   {
      echo "Hola Clase";
	  $xx['ar']=array(array("nombre"=>"juan","edad"=>"20"),array("nombre"=>"ana","edad"=>"34"));
	  
	  
	  $this->load->view('pagina3',$xx);
   }
   function saludo()
   { echo "solo hola";
   }
   function nombre($nom)
   { echo "hola ".$nom;
   }
}
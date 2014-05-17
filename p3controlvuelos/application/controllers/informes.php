<?php

class Informes extends CI_Controller{
    
     
    public function __construct() {
        parent:: __construct();
        $this->load->model('vuelos_model');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
    }



    public function index() {
    
  if(isset($_POST['lista']) && $_POST['lista'] == 1){
      
     
      $fecha = $_POST['fecha'];
      $destino = $_POST['destino'];
      $hora = $_POST['hora'];
      
      $usuarioLogeado = $this->session->userdata['Nombre'];
      
      $result['form'] = $_POST['lista'];
      $result['nombre'] = $usuarioLogeado;
      $result['datos'] = $this->vuelos_model->listaVuelo($fecha,$hora,$destino);
      
      $this->load->view('detalles',$result);
      
      
      
  }else if($_POST['pasajero'] == 2){
   
      // variable pasajero indica formulario abajo
      $rut = $_POST['rut'];
      $datosPasa['nombre'] = $this->session->userdata['Nombre'];
      $datosPasa['datos'] = $this->vuelos_model->busquedaPasajero($rut);

      $this->load->view('detallesPasajero',$datosPasa);
  }
}

public function borrarVuelo($idvuelo, $idusuario,$asiento){
    
    $this->vuelos_model->borrar($idvuelo,$idusuario,$asiento);
    echo "Vuelo eliminado correctamente ";
    
}

}
?>

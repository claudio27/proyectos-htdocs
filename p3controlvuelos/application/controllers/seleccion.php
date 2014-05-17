<?php

class Seleccion extends CI_Controller{
    
    public function __construct() {
        parent:: __construct();
        $this->load->model('login_model');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index() {

        
                      // creamos el arreglo con los datos recividos del form
                        $data = array(   
                          'Fecha' => $_POST['fecha'] ,
                          'Hora' => $_POST['hora'] ,
                          'Destino' => $_POST['destino']
                           );
                        
                          $disp = $this->login_model->existenciaVuelos($data['Fecha'],$data['Destino'],$data['Hora']);
              
//                          echo $data['Fecha']." ".$data['Destino']." ".$data['Hora']."\n";
//                          echo $disp['existe']."\n";
//                            
                          if($disp['existe']==1){
                              // ver si tiene cupo
                              // si tiene mostrar asientos disponibles
                              // mandar a otro formulario que pide asiento
                              // confirmar con javascript
                              
                              echo "Existe ";
                              
                              $idvuelo = $this->login_model->idVuelo($data['Destino']);
                              $pasajeros = $this->login_model->cantidadPasajeros($idvuelo['id']);
                              // cantidad de pasajeros por vuelo
                              $cupo = $pasajeros['cantidad'];
                              echo $pasajeros['cantidad'] ." asiento ocupado de 10 ";
                              
                              if($this->login_model->cupo($cupo)){
                                  $n_total = array(1,2,3,4,5,6,7,8,9,10);
                                  $i = 0;                                  
                                  
                                  $n_asientos;
                                  
                                  // asientos ocupados, lista
                                  $asientos = $this->login_model->asientosOcupados($idvuelo['id']);
                                  
                                  foreach ($asientos as $value) {
                                      
                                      $n_asientos[$i] = $value['Asiento'];
                                      $i++;
                                  }
                                  
                                 // busca si el asiento ya esta ocupado
                                  for($j=0 ; $j < $cupo; $j++){
                                      
                                      for($k=0; $k < 10 ; $k++){
                                          
                                          if($n_asientos[$j] == $n_total[$k])
                                          {
                                              $n_total[$k] = 0;
                                          }
                                      }
                                  }
                                      // ahora n_total tiene [0,2,0,....]
                                      // sacar los numeros ponerlos en arreglo
                                      // mandarlos a la vista para que elija el 
                                      // asiento
                                      
                                  $sinAsignar;
                                  $idj=0;
                                      for($m=0;$m < 10 ; $m++){
                                        //  echo $n_total[$m]." - ";
                                          if($n_total[$m] != 0){
                                              
                                              $sinAsignar[$idj] = $n_total[$m];
                                              $idj++;
                                          }
                                      }
                                      
                                      
//                                      for($m=0;$m < (10 -$cupo) ; $m++){
//                                          echo $sinAsignar[$m]." - ";
//                                          }

                                      $tamAsientos = (10 - $cupo);
                                      $idVuelo = $idvuelo['id'];
                                      $idUsuario = $_POST['idusuario'];
                                      $nombre = $this->session->userdata['Nombre'];
                                      
                                      $datos = array(
                                          'nombre'=> $nombre,
                                        'cantLibres' => $tamAsientos,
                                          'idvuelo' => $idVuelo,
                                          'idusuario' => $idUsuario,
                                          'asientos' => $sinAsignar
                                      );
                                      
                                      // ademas mandar idusuario, idvuelo
                                      // mandar lista de asientos libres a la vista
                                      $this->load->view('asientos_disponibles_v',$datos);
                                  
                                  
                                  
                                  
                              }else{
                                  echo "Vuelo Completo";
                              }
                              
                              
                              
                          }else{
                              
                              echo "No existen vuelos en este horario";
                          }
   
    }



}
?>

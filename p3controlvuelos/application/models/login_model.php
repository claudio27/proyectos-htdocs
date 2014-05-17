<?php /** IMPORTANTE...  PARA TRABAJAR CON BD DEBEMOS CONFIGURAR EL ARCHIVO database.php INDICANDO HOSTNAME, USERNAME, PASSWORD, DATABASE
          ADEMAS ES IMPORTANTE MODIFICAR EN EL ARCHIVO config.php LA ZONA $config['encryption_key'] = ''; CAMBIAR POR $config['encryption_key'] = 'MySql' */
		  
class login_model extends CI_Model
{
   public function __construct()
    {
    $this->load->library('session');   //Cargo lo que usaré, en este caso las sessiones y las funciones de database
    $this->load->database();
    }
   
   
   /** Esta función recibe un username y password y los busca en la tabla usuarios, si los encuentra los envía como arreglo */
   public function getLogin($username,$password)
    {
    //comprobamos que el nombre de usuario y contraseña coinciden
    $data = array(
    'Login' => $username,                  //Aquí se fabrica un arreglo para buscarlo luego en la tabla, este arreglo es indexado por clave
    'Pass' => $password                  // donde la clave es el nombre del campo y el contenido es lo que buscaré luego.
    );
   
    $query = $this->db->get_where('usuario',$data);  // aquí se hace la búsqueda en la tabla usuarios donde se encuentre una fila con la forma de $data
    return $query->result_array();                    // esto retornará lo encontrado como arreglo.
    }
   
   public function getTabla()                  //Esta función retornará como arreglo los datos de la tabla usuarios
   { $query=$this->db->get('usuario');
     return $query->result_array();
   }
   
   /**Esta función nos servirá para validar si un usuario ha sido logeado correctamente, ya que cuando haga esto, se crearán variables de session
   * y asi yo podré preguntar por alguna de ellas, en este caso pregunto por la variable username, si existe significa que se logeo correctamente */
    public function isLogged() 
    {
    //Comprobamos si existe la variable de sesión username. En caso de no existir, le impediremos el paso a la página para usuarios registrados
   
        if(isset($this->session->userdata['username']))
        {
        return TRUE;
        }
        else
        {
        return FALSE;
        }
       
    }
    public function destinos(){
  
        $this->db->select('Destino');

        $query = $this->db->get('vuelo');
        return $query->result_array();

// Produces: SELECT Destino FROM vuelo
    }
   
   
   /** esta función termina con las variables de session creadas */
    public function close()
    {
    //cerrar sesión
    return $this->session->sess_destroy();
    }
    
    public function inserta($arr){
        
        $this->db->insert('usuario',$arr);
            
        
    }
      public function insertaVuelo($arr){
        
        $this->db->insert('usuario_vuelo',$arr);
            
        
    }
    // no funca, deprecated XD
    public function disponibilidad($arr){
        
     $query = $this->db->get_where('vuelo',$arr); 
    return $query->result_array();
    }
    
    
    /**
     * si es 0 no hay 1 si hay vuelos
     */
    public function existenciaVuelos($fecha, $destino, $hora){
        
        $sql = "select count(*) as existe 
from vuelo where Fecha = '$fecha' and Destino = '$destino' and Hora = '$hora'";
        //echo $sql."\n";
        $query = $this->db->query($sql);

$row = $query->row_array();
return $row;
        
    }
    
    // devuelve el id de un vuelo 
    // para hacer la consulta de las asientos vacantes
    public function idVuelo($destino){
        
        $sql = "select v.Id_vuelo as id from vuelo v where v.Destino = '$destino'";
        
        $query = $this->db->query($sql);
        
        $row = $query->row_array();
        return $row;
    }
    
    // devuelve la cantidad de pasajeros por vuelo
    // si es menor o igual a 10 no hay cupos
    public function cantidadPasajeros($idViaje){
        
        $sql = "select count(*) as cantidad from  usuario_vuelo where Id_viaje = $idViaje";
        
        $query = $this->db->query($sql);
        
        $row = $query->row_array();
        return $row;
        
        
    }
    
    // devuelve un arreglo con todos los asientos ocupados
    public function asientosOcupados($idViaje){
        
        $sql = "select Asiento from usuario_vuelo where Id_viaje = $idViaje";
        
        $query = $this->db->query($sql);
        
        $row = $query->result_array();
        return $row;
        
        
    }
    
    public function cupo($cantidad){
        
        // 9 porque para el 10 ya no debe mostrar la disponibilidad
        if ($cantidad <= 9) {
            
            return true;
        }else{
            return false;
        }
        
    }
    
    
    
    
   
}
?>
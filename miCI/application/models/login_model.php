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
    'username' => $username,                  //Aquí se fabrica un arreglo para buscarlo luego en la tabla, este arreglo es indexado por clave
    'password' => $password                  // donde la clave es el nombre del campo y el contenido es lo que buscaré luego.
    );
   
    $query = $this->db->get_where('usuarios',$data);  // aquí se hace la búsqueda en la tabla usuarios donde se encuentre una fila con la forma de $data
    return $query->result_array();                    // esto retornará lo encontrado como arreglo.
    }
   
   public function getTabla()                  //Esta función retornará como arreglo los datos de la tabla usuarios
   { $query=$this->db->get('usuarios');
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
   
   
   /** esta función termina con las variables de session creadas */
    public function close()
    {
    //cerrar sesión
    return $this->session->sess_destroy();
    }
}
?>
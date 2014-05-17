<?php require("conecxionClass.php");
 class Alumno{
 private $ar;
 
 function __construct()
 { $this->ar=array();
 }
 
 function agrega($nom,$ape,$tel,$sex,$rut,$dig,$fec,$id_car,$ing,$des)
 { $sql="insert into alumno (id_alumno,nombre,apellido,telefono,sexo,rut,digito,nacimiento,id_carrera,ingreso,desarrollo) values(null,'$nom','$ape','$tel','$sex',$rut,'$dig','$fec',$id_car,$ing,'$des')";
   $res=mysql_query($sql,miConexion::alumno());
   if(mysql_affected_rows()>0)
     { return mysql_insert_id();
	 }else {return false;}

 }
 
 function agrega_beca($id_alumno,$id_beca)
 { $sql="insert into becaxalumno values($id_alumno,$id_beca)";
   $res=mysql_query($sql,miConexion::alumno());
   if(mysql_affected_rows()>0)
     { return true;
	 }else {return false;}
 }
 function getTabla()
 {$res=mysql_query("select * from alumno",miConexion::alumno());
   if(mysql_num_rows($res)>0)
   {  while($this->ar[]=mysql_fetch_assoc($res));
	}
   return $this->ar;
 }
 
 function elimina($id_alumno){
  
  $sql = "delete from alumno where id_Alumno = $id_alumno";
  mysql_query($sql,miConexion::alumno());
  
 }
 
 function eliminar($id){

$sql = "delete from alumno where id_Alumno = $id";

   $res=mysql_query($sql,miConexion::alumno());

	if($res == 1){
		
		echo "Borrado exitosamente";
	
	}

}
 
 }

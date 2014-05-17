<?php

$user = "root"; // nombre usuario
$db = "tkprof-db"; // nombre base de datos
$pass = ""; // password, en este caso esta en blanco

$conexion = mysql_connect("localhost",$user,$pass);

mysql_select_db($db,$conexion);


//$today = date("Y/n/j");

/*mysql_query("insert into sesion  values(2,'".$today."')");
mysql_query("insert into sesion  values(3,'".$today."')");
mysql_query("insert into sesion  values(4,'".$today."')");*/

//mysql_query("delete * from sesion");
//$instruccion = "hola ";
//$tabla = "como estas";

//mysql_query("insert into instruccion(instruccion, tabla) values('".$instruccion."','".$tabla."')");
?>
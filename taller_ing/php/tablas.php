<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../css/estilo.css" type="text/css" />
<title>Tablas</title>
</head>
<table width="700" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>





<body>
<?php

include("conexion.php");

$result = mysql_query("select tabla from instruccion");
echo "<h1> Tablas utilizadas en tkprof </h1>";


echo "<table width='700' border='1' cellspacing='0' cellpadding='0'>";

while($row = mysql_fetch_array($result, MYSQL_NUM)){

echo "<tr>";
foreach($row as $atributo)
	print "<td>{$atributo}</td>";
	
	print "</tr>";



}
echo "</table>";
echo "<a href='../index.php'>Volver</a>";




?>
</body>
</html>

<!DOCTYPE html >
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<html>
  <head>
      <title>Publicacion</title>
      <link type="text/css" rel="stylesheet" href="Estilo.css" >
	  <script type="text/javascript" src="miScript.js"> </script>
	  
</head>
<body>

<div id="registro" style="text-align:center">
        <p></p>
         <img src="logo.jpg" style="width:600px" />
		 
		    <h1> VISTA DE ALUMNOS </h1>
			
		<table>
  <tr>
     <th>NOMBRE</th><th>APELLIDO</th>
  </tr> 

<?php
  foreach($datos as $fila){
  echo "<tr>";
  echo "<td> ".$fila['nombre']." </td> <td>".$fila['apellido']."</td>"."<td>".$fila['id_Alumno']."</td>".
  "<td><a href="."controlAlumno.php?id=".$fila['id_Alumno']." 
  onclick= 'return confirm(\"Eliminar a ".$fila['nombre']."\" )' >Borrar</a></td>";
  echo "</tr>";
 }
  ?>
  </table>	
			
</div>



</body>
</html>

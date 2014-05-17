<!DOCTYPE html >
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<html>
  <head>
      <title>Publicacion</title>
      <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?> css/estilo.css" >
	  
	  
</head>
<body>

<div id="registro" style="text-align:center">
        <p><?php echo base_url(); ?></p>
         <img src="<?php echo base_url(); ?>images/logo.jpg" style="width:600px" />
		 
		    <h1> VISTA DE ALUMNOS </h1>
			
		<table>
  <tr>
     <th>NOMBRE</th><th>EDAD</th>
  </tr> 
 
<?php
 foreach($ar as $fila){
  echo "<tr>";
  echo "<td> ".$fila['nombre']." </td> <td>".$fila['edad']."</td>";
  echo "</tr>";
 }
  ?>
  </table>	
			
</div>



</body>
</html>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Sistema de Control</title>
      <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/estilo.css" >
	 
</head>
 
<body>
Bienvenido <?php echo $Nombre ?>   <!--  es lo mismo que echo $nombre;  -->  

<table>
  <tr><th>USUARIO</th><th>NOMBRE</th><th>TIPO</th>
     
  
  </tr>
  <?php foreach($datos as $reg){
        echo "<tr> <td>".$reg['Login']."</td><td>".$reg['Nombre']."</td><td>".$reg['Tipo']."</td>";
		
		echo"</tr>"; } ?>
</table>

<a href="<?php base_url();?>login/destroy">SALIR</a>

</body>
</html>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Sistema de Control</title>
      <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/estilo.css" >
	 
</head>
 
<body>
Bienvenido <?= $nombre ?>   <!--  es lo mismo que echo $nombre;  -->  

<table>
  <tr><th>USUARIO</th><th>NOMBRE</th><th>TIPO</th>
     <?php if($tipo==1) echo "<th>PASSWORD</th>";   //recordemos que $tipo, $nombre y $datos vienen desde el controlador?>
  
  </tr>
  <?php foreach($datos as $reg){
        echo "<tr> <td>".$reg['username']."</td><td>".$reg['nombre']."</td><td>".$reg['tipo']."</td>";
		if($tipo==1) echo "<td>".$reg['password']."</td>"; 
		echo"</tr>"; } ?>
</table>

<a href="<?php echo base_url();?>Termino">SALIR</a>
<br /> <a href="<?php echo base_url();?>otro">Pagina de Ejemplo para control de session</a>
</body>
</html>
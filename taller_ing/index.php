<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Analizador Tkprof - Taller Ingenier&iacute;a de software</title>

<link rel="stylesheet" href="css/estilo.css" type="text/css" />


</head>

<body>

<h1>Analizador Tkprof</h1>

 <form action="php/upload.php" method="post" enctype="multipart/form-data">
      <legend>Subir archivo Tkprof</legend>
	  <input name="archivo" type="file" size="35" />
      <input name="enviar" type="submit" value="Subir"/>
      <input name="action" type="hidden" value="upload" />     
</form>
	
	<p id="eventos">
	<span>
	<a href="php/tablas.php">Identificar Tablas</a> 
	<a href="php/leer_dir.php">B&uacute;squeda por aparici&oacute;n</a>
	<a href="#">B&uacute;squeda por aparici&oacute;n en tabla</a>
	<a href="#">An&aacute;lisis instruccion SQL</a>
	<a href="php/simpleplot.php">Gr&aacute;ficos</a>
	<a href="#">Hist&oacute;rico</a>
	
	</span>
	</p>
	
	
	<div> 
	<?php
	
	
	?>	
	
	
	</div>
	

	  
	    
</body>
</html>

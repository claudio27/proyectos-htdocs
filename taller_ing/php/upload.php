
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../css/estilo.css" type="text/css" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php
include("leer_mostrar.php");


    $status = "";
    if ($_POST["action"] == "upload") {
        // obtenemos los datos del archivo
        $tamano = $_FILES["archivo"]['size'];
        $tipo = $_FILES["archivo"]['type'];
        $archivo = $_FILES["archivo"]['name'];
       // $prefijo = substr(md5(uniqid(rand())),0,6);
       
        if ($archivo != "") {
            // guardamos el archivo a la carpeta files
          //  $destino =  "files/".$prefijo."_".$archivo;
			  $destino =  "files/".$archivo;
            if (copy($_FILES['archivo']['tmp_name'],$destino)) {
                $status = "<h1>Archivo subido: <b>".$archivo."</b></h1>";
				// @ para que no muestre los errores
				@leer_lineas("files/".$archivo);
				
		echo $status." <a href='../index.php'>Volver</a>";
            } else {
                $status = "Error al subir el archivo";
		echo $status." <a href='../index.php'>Volver</a>";
		
            }
        } else {
            $status = "<h1>Error al subir archivo--</h1>";
	    echo $status." <a href='../index.php'>Volver</a>";
        }
    }
	


?>
</body>
</html>
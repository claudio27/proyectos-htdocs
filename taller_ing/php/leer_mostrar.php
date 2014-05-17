<?php
include("conexion.php");

function leer($file){

$archivo = file_get_contents($file); //Guardamos archivo.txt en $archivo
$archivo = ucfirst($archivo); //Le damos un poco de formato
$archivo = nl2br($archivo); //Transforma todos los saltos de linea en tag <br/>
echo "<strong>Archivo de texto archivo.txt:</strong> </br>";
echo $archivo." <a href='../index.php'>Volver</a>";
}



function leer_lineas($archivo){
	//crea la sesion una vez por archivo abierto
	$today = date("Y/n/j");
	mysql_query("insert into sesion(fecha) values('".$today."')");
	
	 $vlineas = file($archivo);
	 $tam = count($vlineas);
	 echo "<h1>cantidad lineas leidas:".$tam."</h1>";
	 
	 
	 
	
	/*foreach ($vlineas as $sLinea)
        echo $sLinea."<br>";*/
		
	for($i = 0; $i <  $tam; $i++){
	 	$linea = $vlineas[$i];
		$linea_detalle = explode(" ", $linea);
		
	 	if(preg_match("/INSERT/", $linea_detalle[0])){
		
			//echo "INSERT en la linea ".$i."</br>";
			$instruccion = $linea_detalle[0];
			$tabla = $linea_detalle[2];
			$campo1 = $linea_detalle[4];
			$campo2 = $linea_detalle[5];
			$campo3 = $linea_detalle[6];
			//echo $instruccion." , ".$tabla."---</br>";
			
			mysql_query("insert into instruccion(instruccion, tabla, campos) values('".$instruccion."','".$tabla."','".$campo1." ".$campo2." ".$campo3."')");
				
		}else if(preg_match("/VALUES/", $linea_detalle[0])){
		
			//echo "VALUES en la linea".$i."</br>";
		
		}else if(preg_match("/call/", $linea_detalle[0])){
		
			//echo "call en la linea".$i."</br>";
		
		}else if(preg_match("/total/", $linea_detalle[0])){
				
			//echo "total en la linea----------------".$i."</br>";
			//la linea actual sin separar por espacios en blanco

			$linea_total = $vlineas[$i];
			//echo $linea_total."----------</br>";
			
			//TIENE LOS TOTALES DE LAS LLAMADAS HECHAS POR LAS TABLAS
			$totales = explode("     ",$linea_total);
			//echo $totales[0]."-".$totales[1]."-".$totales[2]."-</br>";
			
			$count = $totales[1];
			$cpu = $totales[2];
			$elapsed = $totales[3];
			$disk = $totales[4];
			$query = $totales[5];
			$current = $totales[6];
			$rows = $totales[7];
			
			
		mysql_query("insert into totales(count, cpu, elapsed, disk, query, current, rows)
		 values('".$count."','".$cpu."','".$elapsed."','".$disk."','".$query."','".$current."','".$rows."')");
			
			
			
		}else if(preg_match("/SELECT/",$linea_detalle[0])){
			/*implementar después*/
			//echo "SELECT en la linea".$i."</br>";
						
		
		}else if(preg_match("/DELETE/",$linea_detalle[0])){
		
			//echo "DELETE en la linea".$i."</br>";
			
			$instruccion = $linea_detalle[0];
			$tabla = $linea_detalle[2];
			//echo $instruccion." , ".$tabla."---</br>";
			
			mysql_query("insert into instruccion(instruccion, tabla) values('".$instruccion."','".$tabla."')");
			
		
		}else if(preg_match("/UPDATE/",$linea_detalle[0])){
		
			//echo "UPDATE en la linea".$i."</br>";
			
			$instruccion = $linea_detalle[0];
			$tabla = $linea_detalle[1];
			$campo = $linea_detalle[3];
			//echo $instruccion." , ".$tabla.",".$campo."---</br>";
			
			mysql_query("insert into instruccion(instruccion, tabla, campos) values('".$instruccion."','".$tabla."','".$campo."')");
			
		
		}else if(preg_match("/CREATE/",$linea_detalle[0])){
		
			//echo "CREATE en la linea".$i."</br>";
		
		}else if(preg_match("/DROP/",$linea_detalle[0])){
		
			//echo "DROP en la linea".$i."</br>";
		
		}
	 
	}

    // O una en concreto:
    //$sLinea = $vlineas[0];
	//echo "la linea cero".$sLinea;
	
	
	}
	
?>

<?php //no olvidar poner
include(encabezado.php);//produce un warnig
//require() // un error fatal

function incrementa(&$a){ //paso por referencia

$a = $a + 1;
}

$b = 2;

incrementa($b); //debería incrementar b
print $b; //mostraría un 3

//argumentos por defecto

require(pie.php);
?>

<?php



$fp = fopen('cuenta.txt', 'a');

$hora = date('H:i:s');

fwrite($fp, $hora.PHP_EOL);

fclose($fp);


?>

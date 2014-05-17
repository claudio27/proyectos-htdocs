<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
          <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/estilo.css" >
        <script src="<?php echo base_url(); ?>js/jquery_1.4.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>js/jquery_validate.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>js/script.js" type="text/javascript"></script>  

        <title>Asientos Disponibles</title>
    </head>
    <body>
        <h1>Asientos disponibles</h1>
        <h3> Bienvenido/a <?php echo $nombre?></h3>
        <form id="asiento" method="post" accept-charset="utf-8" onsubmit="return confirm('Desea validar vuelo');"action="<?php echo base_url(); ?>validaVuelo" >
                
                
                <label for="asiento">Elija Asiento</label>
                <input type="hidden" value="<?php echo $idusuario?>" name="idusuario"/>
                <input type="hidden" value="<?php echo $idvuelo?>" name="idvuelo" />
                
                <select name="asiento">
                    <?php for($i=0 ; $i < $cantLibres ; $i++) {  ?>
                                          
                    <option> <?php echo $asientos[$i];?></option>
                    <?php } ?>
                </select>
                <input type="submit" value="Confirmar Vuelo">
            </form>
        
         <a href="<?php echo base_url()?>login">Volver</a>


    </body>
</html>

<?php
    class miConexion{
	 
	   
	   static function alumno()
	   { $link=mysql_connect("localhost","root","nube123");
	     mysql_select_db('ejeprueba2',$link);
		 return $link;
	   }
	   
	   
	}
	?>

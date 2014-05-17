<?php
    class miConexion{
	 
	   
	   static function alumno()
	   { $link=mysql_connect("localhost","root","");
	     mysql_select_db('electivo',$link);
		 return $link;
	   }
	   
	   
	}
	?>
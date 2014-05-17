
		function leeImagen(obj)
		{ x=document.getElementById('idImagen');
		  x.src=obj.src;
		}

	    function error(obj)
		 { obj.className="Error";}
		
		function noerror(obj)
            {obj.className="noError";}		
		
		
		
		function validarEmail(obj,sp)
		 { re=/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,3})$/ 
   		     if(!re.exec(obj.value))    
			  {         error(obj);
				  document.getElementById(sp).innerHTML="Formato Incorrecto";
				  document.getElementById(sp).style.visibility="visible";     
				  return false;}
			  else
			  { noerror(obj);
				 document.getElementById(sp).innerHTML="";
				 document.getElementById(sp).style.visibility="hide";
				 return true;}
  	     }		
		function validarFecha(obj,sp)
		 { re=/^(\d{1,2})(\/|-)(\d{1,2})(\/|-)(\d{4})$/;
   		     if(!re.exec(obj.value))    
			  {         error(obj);
				  document.getElementById(sp).innerHTML="Formato Incorrecto";
				  document.getElementById(sp).style.visibility="visible";     
				  return false;}
			  else
			  { noerror(obj);
				 document.getElementById(sp).innerHTML="";
				 document.getElementById(sp).style.visibility="hide";
				 return true;}
  	     }			
		
		
		function valida(obj,sp)
           { if(obj.value=="")
                {error(obj);
				  document.getElementById(sp).innerHTML="Campo Vacío";
				  document.getElementById(sp).style.visibility="visible";
				  return false;
				  }
              else
                 {noerror(obj);
				 document.getElementById(sp).innerHTML="";
				 document.getElementById(sp).style.visibility="hide";
				 return true;}
            }



		  function validaFin()
		  { nom=document.forms['fregistro']['idNombre'];
		    ape=document.forms['fregistro']['idApellido'];
			cor=document.forms['fregistro']['idCorreo'];
			tit=document.forms['fregistro']['idTitulo'];
			pub=document.forms['fregistro']['idPubli'];
			cat=document.forms['fregistro']['idCategoria'];
			des=document.forms['fregistro']['idDesarrollo'];

		     if(valida(nom,'spNombre') && valida(ape,'spApellido') && validarEmail(cor,'spCorreo') && 
		     	valida(tit,'spTitulo') && valida(pub,'spPubli') && valida(cat,'spCategoria') && valida(des,'spDesarrollo'))
			    {return true;}
			else
                {return false;}				
		
		  }
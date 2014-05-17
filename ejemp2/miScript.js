function valida()
{ sw=false;
  lista=document.forms['fregistro']['beca[]'];
  for(x=0;x<lista.length;x++)
    {if(lista[x].checked) {sw=true;} // para ver si estan chequeados
      }	  
	 
  if(!sw) // si no hay ninguna casilla marcada pone un error
    { 
	  document.getElementById("marcoBecas").className="Error";
	  document.getElementById("spBecas").innerHTML="Debe seleccionar al menos una";
	  return false;
	}
   else 
   {  
      document.getElementById("marcoBecas").className="noError";
	  document.getElementById("spBecas").innerHTML="";
	  nom=document.forms['fregistro']['txtNombre'].value+" "+document.forms['fregistro']['txtApellido'].value;
	  car=document.forms['fregistro']['carrera'].value;
	  
	  if(car == 1){ car = "Ing en Comp";}
	else if(car == 2){ car = "ICCI";}
	else if(car == 3){ car = "Ing Ejec Comp"; }	  
	  
	  res=confirm("Se registrara a "+nom+"\n en la carrera de:\n"+car);
	  
	  return res;
   }
    
}

function eliminar(){

	res = confirm("Seguro que desea eliminar a este alumno ");
	
	return res;

}

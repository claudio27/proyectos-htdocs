<?php echo form_open('Login/index');  //esto reemplaza a la etiqueta de inicio del form  ?>
<!--form method="post" accept-charset="utf-8" action="/miCI/Login/index"   -->
<label>Usuario</label><br>
<input type="text" id="username" name="username"><br><br>
<label>Password</label><br>
<input type="password" id="password" name="password">
<br><br>
<input type="submit" value="Enviar">
<!--/form--> 
<?php
echo form_close();    //esto reemplaza al </form>?>
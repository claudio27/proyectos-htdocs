<!DOCTYPE HTML PUBLIC
                 "-//W3C//DTD HTML 4.01 Transitional//EN"
                 "http://www.w3.org/TR/html401/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <title>Phonebook Details</title>
</head>
<body bgcolor="white">
<form method="post" action="example.8-12.php">
<h1>Phonebook Details</h1>
<h2>{MESSAGE}.
    Fields shown in <font color="red">red</font> are mandatory.</h2>
<table>
<!-- BEGIN hiddeninput -->
<tr>
 <td><input type="hidden" name="{HINPUTNAME}" value="{HINPUTVALUE}"></td>
</tr>
<!-- END hiddeninput -->
<!-- BEGIN mandatoryinput -->
<tr>
  <td><font color="red">{MINPUTTEXT}:</font></td>
  <td>
  <input type="text" name="{MINPUTNAME}" value="{MINPUTVALUE}"
         size={MINPUTSIZE}>
  </td>
</tr>
<!-- END mandatoryinput -->
<tr>
   <td><input type="submit" value="{SUBMITVALUE}"></td>
</tr>
</table>
</form>
</body>
</html>

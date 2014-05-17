<?php
require_once "HTML/Template/ITX.php";

$template = new HTML_Template_ITX("./templates");
$template->loadTemplatefile("example.11-5.tpl", true, true);

if(strncmp("141.190.17", $_SERVER["REMOTE_ADDR"], 10) != 0)
{
  // Not allowed
  header("HTTP/1.1 403 Forbidden");
  $template->touchBlock("noaccess");
  $template->show();
  exit;
}
else
{
  // Allowed
  $template->touchBlock("authenticated");
  $template->show();
}
?>

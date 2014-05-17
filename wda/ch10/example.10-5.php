<?php
require 'db.inc';
require_once "HTML/Template/ITX.php";

if (!($connection = @ mysql_connect("localhost", "fred", "shhh")))
   die("Could not connect to database");

session_start();

$template = new HTML_Template_ITX("./templates");
$template->loadTemplatefile("example.10-6.tpl", true, true);

$row = array();

// Has previous data been entered?
// If so, initialize $row from $_SESSION["lastFormVars"]
if (isset($_SESSION["lastFormVars"]))
{
  $row = $_SESSION["lastFormVars"];
  $template->setVariable("MESSAGE",
                         "Please correct the errors shown below");
  $template->setVariable("SUBMITVALUE", "Try again");
}
else
{
  // If they're not correcting an error show a
  // "fill in the details" message
  $template->setVariable("MESSAGE",
                      "Please fill in the details below to add an entry");
  $template->setVariable("SUBMITVALUE", "Add Now!");
}

$template->setCurrentBlock("mandatoryinput");
$template->setVariable("MINPUTTEXT", "First name");
$template->setVariable("MINPUTNAME", "firstname");
if (!empty($row))
  $template->setVariable("MINPUTVALUE", $row["firstname"]);
else
  $template->setVariable("MINPUTVALUE", "");
if (!empty($_SESSION["errors"]["firstname"]))
{
  $template->setCurrentBlock("mandatoryerror");
  $template->setVariable("MINPUTERROR", $_SESSION["errors"]["firstname"]);
  $template->parseCurrentBlock("mandatoryerror");
}
$template->setCurrentBlock("mandatoryinput");
$template->setVariable("MINPUTSIZE", 50);
$template->parseCurrentBlock("mandatoryinput");

$template->setCurrentBlock("mandatoryinput");
$template->setVariable("MINPUTTEXT", "Surname");
$template->setVariable("MINPUTNAME", "surname");
if (!empty($row))
  $template->setVariable("MINPUTVALUE", $row["surname"]);
else
  $template->setVariable("MINPUTVALUE", "");
if (!empty($_SESSION["errors"]["surname"]))
{
  $template->setCurrentBlock("mandatoryerror");
  $template->setVariable("MINPUTERROR", $_SESSION["errors"]["surname"]);
  $template->parseCurrentBlock("mandatoryerror");
}
$template->setCurrentBlock("mandatoryinput");
$template->setVariable("MINPUTSIZE", 50);
$template->parseCurrentBlock("mandatoryinput");

$template->setCurrentBlock("mandatoryinput");
$template->setVariable("MINPUTTEXT", "Phone");
$template->setVariable("MINPUTNAME", "phone");
if (!empty($row))
  $template->setVariable("MINPUTVALUE", $row["phone"]);
else
  $template->setVariable("MINPUTVALUE", "");
if (!empty($_SESSION["errors"]["phone"]))
{
  $template->setCurrentBlock("mandatoryerror");
  $template->setVariable("MINPUTERROR", $_SESSION["errors"]["phone"]);
  $template->parseCurrentBlock("mandatoryerror");
}
$template->setCurrentBlock("mandatoryinput");
$template->setVariable("MINPUTSIZE", 20);
$template->parseCurrentBlock("mandatoryinput");

$template->setCurrentBlock();
$template->parseCurrentBlock();
$template->show();
?>

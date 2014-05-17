<?php
require 'db.inc';
require_once "HTML/Template/ITX.php";

$template = new HTML_Template_ITX("./templates");
$template->loadTemplatefile("example.8-8.tpl", true, true);

$template->setVariable("MESSAGE",
                     "Please fill in the details below to add an entry");
$template->setVariable("SUBMITVALUE", "Add Now!");

$template->setCurrentBlock("mandatoryinput");
$template->setVariable("MINPUTTEXT", "First name");
$template->setVariable("MINPUTNAME", "firstname");
$template->setVariable("MINPUTVALUE", "");
$template->setVariable("MINPUTSIZE", 50);
$template->parseCurrentBlock("mandatoryinput");

$template->setCurrentBlock("mandatoryinput");
$template->setVariable("MINPUTTEXT", "Surname");
$template->setVariable("MINPUTNAME", "surname");
$template->setVariable("MINPUTVALUE", "");
$template->setVariable("MINPUTSIZE", 50);
$template->parseCurrentBlock("mandatoryinput");

$template->setCurrentBlock("mandatoryinput");
$template->setVariable("MINPUTTEXT", "Phone");
$template->setVariable("MINPUTNAME", "phone");
$template->setVariable("MINPUTVALUE", "");
$template->setVariable("MINPUTSIZE", 20);
$template->parseCurrentBlock("mandatoryinput");

$template->parseCurrentBlock();
$template->show();
?>

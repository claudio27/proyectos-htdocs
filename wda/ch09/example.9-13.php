<?php
require 'db.inc';
require_once "HTML/Template/ITX.php";

$template = new HTML_Template_ITX("./templates");
$template->loadTemplatefile("example.9-14.tpl", true, true);

$template->setVariable("MESSAGE",
                       "Please fill in the details below to join");
$template->setVariable("SUBMITVALUE", "Join Now!");
$template->setVariable("FORMNAME", "custform");
$template->setVariable("SUBMITACTION", "
  document.custform.firstname.hasNospaces = true;
  document.custform.firstname.description = 'First Name';
  document.custform.surname.description = 'Surname';
  document.custform.address.description = 'Address';
  document.custform.email.description = 'Email';
  document.custform.email.isEmail = true;
  document.custform.dob.isDate = true;
  document.custform.dob.description = 'Date of Birth (99/99/9999)';
  document.custform.salary.description = 'Salary';
  document.custform.salary.isNumeric = true;
  document.custform.salary.minNumber = 1;
  document.custform.salary.maxNumber = 1000000;
  document.custform.salary.hasNospaces = true;
  return verify(document.custform);");

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
$template->setVariable("MINPUTTEXT", "Address");
$template->setVariable("MINPUTNAME", "address");
$template->setVariable("MINPUTVALUE", "");
$template->setVariable("MINPUTSIZE", 50);
$template->parseCurrentBlock("mandatoryinput");

$template->setCurrentBlock("mandatoryinput");
$template->setVariable("MINPUTTEXT", "Date of Birth (dd/mm/yyyy)");
$template->setVariable("MINPUTNAME", "dob");
$template->setVariable("MINPUTVALUE", "");
$template->setVariable("MINPUTSIZE", 50);
$template->parseCurrentBlock("mandatoryinput");

$template->setCurrentBlock("mandatoryinput");
$template->setVariable("MINPUTTEXT", "Email");
$template->setVariable("MINPUTNAME", "email");
$template->setVariable("MINPUTVALUE", "");
$template->setVariable("MINPUTSIZE", 30);
$template->parseCurrentBlock("mandatoryinput");

$template->setCurrentBlock("mandatoryinput");
$template->setVariable("MINPUTTEXT", "Annual salary (whole dollars)");
$template->setVariable("MINPUTNAME", "salary");
$template->setVariable("MINPUTVALUE", "");
$template->setVariable("MINPUTSIZE", 6);
$template->parseCurrentBlock("mandatoryinput");

$template->parseCurrentBlock();
$template->show();
?>

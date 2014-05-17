<?php
require 'db.inc';
require_once "HTML/Template/ITX.php";

if (!($connection = @ mysql_connect("localhost", "fred", "shhh")))
   die("Could not connect to database");

$phonebook_id = mysqlclean($_GET, "phonebook_id", 5, $connection);

// Has a phonebook_id been provided?
if (empty($phonebook_id))
  die("You must provide a phonebook_id in the URL.");

$template = new HTML_Template_ITX("./templates");
$template->loadTemplatefile("example.8-8b.tpl", true, true);

// Retrieve details for editing
if (!mysql_select_db("telephone", $connection))
   showerror();

$query = "SELECT * FROM phonebook WHERE phonebook_id = {$phonebook_id}";

if (!($result = @ mysql_query($query, $connection)))
   showerror();

$row = mysql_fetch_array($result);

$template->setVariable("MESSAGE",
                       "Please amend the details below");
$template->setVariable("SUBMITVALUE", "Update Details");

$template->setCurrentBlock("hiddeninput");
$template->setVariable("HINPUTNAME", "phonebook_id");
$template->setVariable("HINPUTVALUE", $row["phonebook_id"]);
$template->parseCurrentBlock("hiddeninput");

$template->setCurrentBlock("mandatoryinput");
$template->setVariable("MINPUTTEXT", "First name");
$template->setVariable("MINPUTNAME", "firstname");
$template->setVariable("MINPUTVALUE", $row["firstname"]);
$template->setVariable("MINPUTSIZE", 50);
$template->parseCurrentBlock("mandatoryinput");

$template->setCurrentBlock("mandatoryinput");
$template->setVariable("MINPUTTEXT", "Surname");
$template->setVariable("MINPUTNAME", "surname");
$template->setVariable("MINPUTVALUE", $row["surname"]);
$template->setVariable("MINPUTSIZE", 50);
$template->parseCurrentBlock("mandatoryinput");

$template->setCurrentBlock("mandatoryinput");
$template->setVariable("MINPUTTEXT", "Phone");
$template->setVariable("MINPUTNAME", "phone");
$template->setVariable("MINPUTVALUE", $row["phone"]);
$template->setVariable("MINPUTSIZE", 20);
$template->parseCurrentBlock("mandatoryinput");

$template->parseCurrentBlock();
$template->show();
?>

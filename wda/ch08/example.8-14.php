<?php
require 'db.inc';
require_once "HTML/Template/ITX.php";

function formerror(&$template, $message, &$errors)
{
  $errors = true;
  $template->setCurrentBlock("error");
  $template->setVariable("ERROR", $message);
  $template->parseCurrentBlock("error");
}

if (!($connection = @ mysql_connect("localhost", "fred", "shhh")))
   die("Could not connect to database");

$firstname = mysqlclean($_POST, "firstname", 50, $connection);
$surname = mysqlclean($_POST, "surname", 50, $connection);
$phone = mysqlclean($_POST, "phone", 20, $connection);

$template = new HTML_Template_ITX("./templates");
$template->loadTemplatefile("example.8-10.tpl", true, true);

$errors = false;

if (empty($firstname))
  formerror($template, "The first name field cannot be blank.", $errors);

if (empty($surname))
  formerror($template, "The surname field cannot be blank.", $errors);

if (empty($phone))
  formerror($template, "The phone field cannot be blank", $errors);

// Now the script has finished the validation, show any errors
if ($errors)
{
  $template->show();
  exit;
}

// If we made it here, then the data is valid
if (!mysql_select_db("telephone", $connection))
  showerror();

// Lock the identifiers table
$query = "LOCK TABLES identifiers WRITE";
if (!(@ mysql_query ($query, $connection)))
   showerror();

// Find the maximum phonebook_id value that's in use
$query = "SELECT phonebook_id FROM identifiers";
if (!($result = @ mysql_query ($query, $connection)))
   showerror();

$row = @ mysql_fetch_array($result);

$phonebook_id = $row["phonebook_id"];

// Update the phonebook_id identifier
$query = "UPDATE identifiers SET phonebook_id = phonebook_id + 1";
if (!($result = @ mysql_query ($query, $connection)))
   showerror();

// Unlock the table
$query = "UNLOCK TABLES";
if (!(@ mysql_query ($query, $connection)))
   showerror();

// Insert the new phonebook entry
$query = "INSERT INTO phonebook VALUES
          ({$phonebook_id}, '{$surname}', '{$firstname}', '{$phone}')";
if (!(@ mysql_query ($query, $connection)))
   showerror();

// Show the phonebook receipt
header("Location: example.8-5.php?status=T&phonebook_id={$phonebook_id}");
?>

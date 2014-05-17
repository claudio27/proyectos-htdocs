<?php
require "db.inc";
require_once "HTML/Template/ITX.php";
require_once "DB.php";

function formerror(&$template, $message, &$errors)
{
  $errors = true;
  $template->setCurrentBlock("error");
  $template->setVariable("ERROR", $message);
  $template->parseCurrentBlock("error");
}

$dsn = "mysql://fred:shhh@localhost/telephone";

$connection = DB::connect($dsn, false);
if (DB::isError($connection))
  die($connection->getMessage());

$firstname = mysqlclean($_POST["firstname"], 50, $connection);
$surname = mysqlclean($_POST["surname"], 50, $connection);
$phone = mysqlclean($_POST["phone"], 20, $connection);

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

// Get a new primary key value for phonebook_id
$phonebook_id = $connection->nextId("phonebook_id");
if (DB::isError($connection))
   die($connection->getMessage());

// Insert the new phonebook entry
$query = "INSERT INTO phonebook VALUES
          ({$phonebook_id}, {$surname}, {$firstname}, {$phone})";
$result = $connection->query($query);
if (DB::isError($result))
   die($result->getMessage());

// Show the phonebook receipt
header("Location: example.8-5.php?status=T&phonebook_id={$phonebook_id}");
?>

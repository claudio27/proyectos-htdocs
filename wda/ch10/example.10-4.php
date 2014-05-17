<?php
require 'db.inc';

if (!($connection = @ mysql_pconnect("localhost", "fred", "shhh")))
   die("Could not connect to database");

$firstname = mysqlclean($_POST, "firstname", 50, $connection);
$surname = mysqlclean($_POST, "surname", 50, $connection);
$phone = mysqlclean($_POST, "phone", 20, $connection);

// Initialize a session
session_start();

// Set-up an empty $errors array to hold errors
$errors = array();

// Validate the Firstname
if (empty($firstname))
  $errors["firstname"] = "The firstname field cannot be blank.";

// Validate the Surname
if (empty($surname))
  $errors["surname"] = "The surname field cannot be blank.";

// Validate the Phone number. It must have the correct format
$validPhoneExpr = "^([0-9]{2,3}[ ]?)?[0-9]{4}[ ]?[0-9]{4}$";

if (empty($phone) || !ereg($validPhoneExpr, $phone))
  $errors["phone"] = "The phone number must be 8 digits in length,.
                       with an optional 2 or 3 digit area code";

// Now the script has finished the validation, check if
// there were any errors
if (count($errors))
{
  // Set up a $lastformVars array to store
  // the previously-entered data
  $lastformVars = array();
  $lastFormVars["surname"] = $surname;
  $lastFormVars["firstname"] = $firstname;
  $lastFormVars["phone"] = $phone;

  // Save the array as a session variable
  $_SESSION["lastFormVars"] = $lastFormVars;

  // Store the $errors array as a session variable
  $_SESSION["errors"] = $errors;

  //  Relocate to the phonebook form
  header("Location: example.10-5.php");
  exit;
}

// If we made it here, then the data is valid
if (!mysql_select_db("telephone", $connection))
  showerror();

// Insert the new phonebook entry
$query = "INSERT INTO phonebook VALUES
          (NULL, '{$surname}', '{$firstname}', '{$phone}')";

if (!(@ mysql_query ($query, $connection)))
   showerror();

// Find out the phonebook_id of the new entry
$phonebook_id = mysql_insert_id();

// Destroy the session
session_destroy();

// Show the phonebook receipt
header("Location: example.8-5.php?status=T&phonebook_id={$phonebook_id}");
?>

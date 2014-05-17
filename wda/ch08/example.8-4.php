<?php
require "db.inc";

// Test for user input
if (!empty($_GET["surname"]) &&
    !empty($_GET["firstname"]) &&
    !empty($_GET["phone"]))
{
  if (!($connection = @ mysql_connect("localhost", "fred", "shhh")))
     die("Could not connect to database");

  $surname = mysqlclean($_GET, "surname", 50, $connection);
  $firstname = mysqlclean($_GET, "firstname", 50, $connection);
  $phone = mysqlclean($_GET, "phone", 20, $connection);

  if (!mysql_select_db("telephone", $connection))
     showerror();

  // Insert the new phonebook entry
  $query = "INSERT INTO phonebook VALUES
            (NULL, '{$surname}', '{$firstname}', '{$phone}')";

  if (@mysql_query ($query, $connection))
  {
    header("Location: example.8-5.php?status=T&" .
           "phonebook_id=". mysql_insert_id($connection));
    exit;
  }
} // if empty()

header("Location: example.8-5.php?status=F");
?>

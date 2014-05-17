<?php
require "db.inc";
require_once "HTML/Template/ITX.php";

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

  if (!(@mysql_query ($query, $connection)))
    showerror();

  $template = new HTML_Template_ITX("./templates");
  $template->loadTemplatefile("example.8-3.tpl", true, true);
  $template->setCurrentBlock();
  $template->setVariable("SURNAME", $surname);
  $template->setVariable("FIRSTNAME", $firstname);
  $template->setVariable("PHONE", $phone);
  $template->parseCurrentBlock();

  $template->show();
} // if empty()
else
  // Missing data: Go back to the <form>
  header("Location: example.8-1.html");
?>

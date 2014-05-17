<?php
require "db.inc";
require_once "HTML/Template/ITX.php";

if (!($connection = @ mysql_connect("localhost", "fred", "shhh")))
   die("Could not connect to database");

$status = mysqlclean($_GET, "status", 1, $connection);

$template = new HTML_Template_ITX("./templates");
$template->loadTemplatefile("example.8-6.tpl", true, true);

switch ($status)
{
  case "T":
    $phonebook_id = mysqlclean($_GET, "phonebook_id", 5, $connection);

    if (!empty($phonebook_id))
    {
      if (!mysql_select_db("telephone", $connection))
         showerror();

      $query = "SELECT * FROM phonebook WHERE 
                phonebook_id = {$phonebook_id}";

      if (!($result = @mysql_query ($query, $connection)))
        showerror();

      $row = @ mysql_fetch_array($result);

      $template->setCurrentBlock("success");
      $template->setVariable("SURNAME", $row["surname"]);
      $template->setVariable("FIRSTNAME", $row["firstname"]);
      $template->setVariable("PHONE", $row["phone"]);
      $template->parseCurrentBlock();
      break;
    }

  case "F":
    $template->setCurrentBlock("failure");
    $template->setVariable("MESSAGE", "A database error occurred.");
    $template->parseCurrentBlock();
    break;

  default:
    $template->setCurrentBlock("failure");
    $template->setVariable("MESSAGE", "You arrived here unexpectedly.");
    $template->parseCurrentBlock();
    break;
}

$template->show();
?>

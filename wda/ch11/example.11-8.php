<?php
require "authentication.inc";
require "db.inc";
require_once "HTML/Template/ITX.php";

$template = new HTML_Template_ITX("./templates");
$template->loadTemplatefile("example.11-3.tpl", true, true);

if (!($connection = mysql_connect("localhost", "lucy", "secret")))
    die("Could not connect to database");

if (!mysql_selectdb("authentication", $connection))
   showerror();

$username = mysqlclean($_SERVER, "PHP_AUTH_USER", 50, $connection);
$password = mysqlclean($_SERVER, "PHP_AUTH_PW", 32, $connection);

if (!authenticateUser($connection, $username, $password))
{
  // No credentials found - send an unauthorized
  // challenge response
  header("WWW-Authenticate: Basic realm=\"Flat Foot\"");
  header("HTTP/1.1 401 Unauthorized");

  // Set up the body of the response that is
  // displayed if the user cancels the challenge
  $template->touchBlock("challenge");
  $template->show();
  exit;
}
else
{
  // Welcome the user now they're authenticated
  $template->touchBlock("authenticated");
  $template->show();
}
?>

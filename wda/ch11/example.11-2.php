<?php
require_once "HTML/Template/ITX.php";
require "db.inc";

function authenticated($username, $password)
{
  // If either the username or the password are
  // not set, the user is not authenticated
  if (!isset($username) || !isset($password))
    return false;

  // Is the password correct?
  // If so, the user is authenticated
  if ($password == "kwAlIphIdE")
    return true;
  else
    return false;
}

$template = new HTML_Template_ITX("./templates");
$template->loadTemplatefile("example.11-3.tpl", true, true);

$username = shellclean($_SERVER, "PHP_AUTH_USER", 20);
$password = shellclean($_SERVER, "PHP_AUTH_PW", 20);

if(!authenticated($username, $password))
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

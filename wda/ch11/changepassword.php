<?php
require "authentication.inc";
require "db.inc";

session_start();

// Connect to an authenticated session or relocate to logout.php
sessionAuthenticate();

if (!$connection = @ mysql_connect("localhost", "lucy", "secret"))
  die("Cannot connect");

// Clean the data collected from the user
$oldPassword = mysqlclean($_POST, "oldPassword", 10, $connection);
$newPassword1 = mysqlclean($_POST, "newPassword1", 10, $connection);
$newPassword2 = mysqlclean($_POST, "newPassword2", 10, $connection);

if (!mysql_selectdb("authentication", $connection))
  showerror();

if (strcmp($newPassword1, $newPassword2) == 0 &&
  authenticateUser($connection, $_SESSION["loginUsername"], $oldPassword))
{
  // OK to update the user password

  // Create the digest of the password
  $digest = md5(trim($newPassword1));

  // Update the user row
  $update_query = "UPDATE users SET password = '{$digest}'
                   WHERE user_name = '{$_SESSION["loginUsername"]}'";

  if (!$result = @ mysql_query ($update_query, $connection))
    showerror();

  $_SESSION["passwordMessage"] =
    "Password changed for '{$_SESSION["loginUsername"]}'";
}
else
{
  $_SESSION["passwordMessage"] =
    "Could not change password for '{$_SESSION["loginUsername"]}'";
}

// Relocate to the password form
header("Location: password.php");
?>

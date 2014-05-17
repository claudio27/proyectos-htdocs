<?php
  require_once "HTML/Template/ITX.php";
  require "mysql_sessions.inc";

  // This call either creates a new session or finds an existing one.
  session_start();

  // Check if the value for "count" exists in the session store
  // If not, set a value for "count" and "start"
  if (!isset($_SESSION["count"]))
  {
    $_SESSION["count"] = 0;
    $_SESSION["start"] = time();
  }

  // Increment the count
  $_SESSION["count"]++;

  $template = new HTML_Template_ITX("./templates");
  $template->loadTemplatefile("example.d-10.tpl", true, true);

  $template->setVariable("SESSION", session_id());
  $template->setVariable("COUNT", $_SESSION["count"]);
  $template->setVariable("START", $_SESSION["start"]);
  $duration = time() - $_SESSION["start"];
  $template->setVariable("DURATION", $duration);

  $template->parseCurrentBlock();

  $template->show();
?>

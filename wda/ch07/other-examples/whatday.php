<?php
  require_once "HTML/Template/ITX.php";

  $template = new HTML_Template_ITX('.');
  $template->loadTemplatefile("about_today.tpl", true, true);

  $daynumber = date("w");

  // Is it a weekday?
  if ($daynumber != 0 && $daynumber != 6)
     // Include the weekday template fragment
     $template->addBlockFile("MESSAGE", "NEWMESSAGE", "weekday.tpl");
  else
     // Include the weekend template fragment
     $template->addBlockFile("MESSAGE", "NEWMESSAGE", "weekend.tpl");

  $template->setCurrentBlock("NEWMESSAGE");
  $template->setVariable("DAY", date("l"));
  $template->parseCurrentBlock();
  $template->show();
?>

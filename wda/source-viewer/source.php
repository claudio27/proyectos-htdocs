<?php
  require_once "HTML/Template/IT.php";

function clean($input, $maxlength)
{
  $input = substr($input, 0, $maxlength);
  $input = EscapeShellCmd($input);
  return ($input);
}

if (isset($_GET["source"]))
{
   $source = clean($_GET["source"], 60);

   // Create a new template, and specify that the template files are 
   // in the subdirectory "templates"
   $template = new HTML_Template_IT("./templates");

   // Load the source codetemplate file
   $template->loadTemplatefile("source.tpl", true, true);

   // Should the source be shown?
   if ((eregi("^/ch[0-1][0-9]/example.[0-9]*-[0-9]*[.]php$", $source) ||
        eregi("^/ch[0-1][0-9]/templates/example.[0-9]*-[0-9]*[.]tpl$", $source) ||
        eregi("^/ch[0-1][0-9]/example.[0-9]*-[0-9]*[.]html$", $source) ||
        eregi("^/ch[0-1][0-9]/example.[0-9]*-[0-9]*[.]js$", $source) ||
        eregi("^/app[a-h]/example.[a-h]*-[0-9]*[.]php$", $source) ||
        $source == "/ch11/authentication.inc" ||
        $source == "/ch11/changepassword.php" ||
        $source == "/ch11/home.php" ||
        $source == "/ch11/login.html" ||
        $source == "/ch11/logincheck.php" ||
        $source == "/ch11/logout.php" ||
        $source == "/ch11/password.php" ||
        $source == "/ch11/templates/home.tpl" ||
        $source == "/ch11/templates/logout.tpl" ||
        $source == "/ch11/templates/password.tpl" ||
        $source == "/ch13/alice.inc" ||
        $source == "/appf/mysql_sessions.inc") &&
        file_exists("../" . $source))
     $file = "../" . $source;

   $template->setVariable("PAGE", $source);

   if (isset($file)) 
   {
      $contents = highlight_file($file, true);
      $contents = str_replace("{", "&#123", $contents);
      $contents = str_replace("}", "&#125", $contents);
      $template->setVariable("SOURCE", $contents);
   }
   else 
      $template->setVariable("SOURCE", "Filename Not Found or Not Permitted.");

   $template->setCurrentBlock();
   $template->parseCurrentBlock();
   $template->show();
}
else
   trigger_error("source parameter must be provided", E_USER_ERROR);
?>

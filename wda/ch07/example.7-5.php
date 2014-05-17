<?php
  require_once "HTML/Template/IT.php";
  require "db.inc";

  if (!($connection = @ mysql_connect($hostname, $username, $password)))
     die("Cannot connect");

  if (!(mysql_select_db($databaseName, $connection)))
     showerror();

  if (!($regionresult = @ mysql_query ("SELECT * FROM region LIMIT 10",
                                       $connection)))
     showerror();

  $template = new HTML_Template_IT("./templates");
  $template->loadTemplatefile("example.7-4.tpl", true, true);

  while ($regionrow = mysql_fetch_array($regionresult))
  {
     $template->setCurrentBlock("REGION");
     $template->setVariable("REGIONNAME", $regionrow["region_name"]);

     if (!($wineryresult = 
         @ mysql_query ("SELECT * FROM winery
                         WHERE region_id = {$regionrow["region_id"]}",
                         $connection)))
        showerror();

     while ($wineryrow = mysql_fetch_array($wineryresult))
     {
        $template->setCurrentBlock("WINERY");
        $template->setVariable("WINERYNAME", $wineryrow["winery_name"]);
        $template->parseCurrentBlock();
     }
     $template->setCurrentBlock("REGION");
     $template->parseCurrentBlock();
  }
  $template->show();
?>

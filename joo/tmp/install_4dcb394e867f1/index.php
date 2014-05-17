<?php defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo _LANGUAGE; ?>" xml:lang="<?php echo _LANGUAGE; ?>">
<head>
<!-- Template by Ahadesign.eu
  Contact: info@ahadesign.eu
  Templates and much more http://www.ahadesign.eu -->
<title><?php echo $mosConfig_sitename; ?></title>
<meta http-equiv="Content-Type" content="text/html; <?php echo _ISO; ?>" />
<?php if ($my->id) { initEditor(); } ?>
<?php mosShowHead(); ?>
<script type="text/javascript">
</script>
<?php echo "<link rel=\"shortcut icon\" href=\"$GLOBALS[mosConfig_live_site]/images/favicon.ico\" />" ; ?>
<link href="templates/<?php echo $cur_template; ?>/css/template_css.css" rel="stylesheet" type="text/css" media="screen" />
<?php if ( mosCountModules( 'left' ) <= 0) { ?>
<link href="templates/<?php echo $cur_template; ?>/css/left_css.css" rel="stylesheet" type="text/css" media="screen" />
<?php }
if ( mosCountModules( 'right' ) <= 0) { ?>
<link href="templates/<?php echo $cur_template; ?>/css/right_css.css" rel="stylesheet" type="text/css" media="screen" />
<?php }
if (( mosCountModules( 'left' ) <= 0) && ( mosCountModules( 'right' ) <= 0)) { ?>
<link href="templates/<?php echo $cur_template; ?>/css/leri_css.css" rel="stylesheet" type="text/css" media="screen" />
<?php }
if ((mosCountModules( 'user1' )) && (mosCountModules( 'user2' )) &&  (mosCountModules( 'user5' )) && (mosCountModules( 'advert2' ))) 
{ 
$user1='user1module4';
$user2='user2module4';
$user5='user5module4';
$advert2='advert2module4';
} 
else if ((mosCountModules( 'user1' )) && (mosCountModules( 'user2' )) &&  (mosCountModules( 'user5' )) || (mosCountModules( 'user1' )) && (mosCountModules( 'user2' )) &&  (mosCountModules( 'advert2' )) || (mosCountModules( 'user1' )) && (mosCountModules( 'advert2' )) &&  (mosCountModules( 'user5' )) || (mosCountModules( 'user2' )) && (mosCountModules( 'advert2' )) &&  (mosCountModules( 'user5' )))
{
$user1='user1module3';
$user2='user2module3';
$user5='user5module3';
$advert2='advert2module3';
}
else if ((mosCountModules( 'user1' )) && (mosCountModules( 'user2' )) || (mosCountModules( 'user5' )) && (mosCountModules( 'advert2' )) || (mosCountModules( 'user1' )) && (mosCountModules( 'user5' )) || (mosCountModules( 'user1' )) && (mosCountModules( 'advert2' )) || (mosCountModules( 'advert2' )) && (mosCountModules( 'user2' )) || (mosCountModules( 'user5' )) && (mosCountModules( 'user2' )))
{
$user1='user1module2';
$user2='user2module2';
$user5='user5module2';
$advert2='advert2module2';
}
else if ((mosCountModules( 'user1' )) || (mosCountModules( 'user2' )) || (mosCountModules( 'user5' )) || (mosCountModules( 'advert2' )))
{
$user1='user1module1';
$user2='user2module1';
$user5='user5module1';
$advert2='advert2module1';
} ?>
</head>
<body>
<div id="mainout">
  <div class="header">
    <div id="headleft">
      <div id="headright"> </div>
    </div>
    <div id="logo"></div>
    <h1><?php echo $mosConfig_sitename; ?></h1>
    <?php if (mosCountModules('top')) { ?>
    <div id="topmodule">
      <?php mosLoadModules('top', -2);?>
    </div>
    <?php } ?>
  </div>
  <div class="clear"></div>
  <?php if (mosCountModules('user4')) { ?>
  <div id="user4">
    <?php mosLoadModules('user4', -2);?>
  </div>
  <?php } 
  if (mosCountModules('user3')) { ?>
  <div id="topmenu">
    <?php mosLoadModules('user3', -2);?>
  </div>
  <?php } ?>
  <div class="bread">
    <div id="breadleft">
      <div id="breadright"> </div>
    </div>
    <div id="breadtext">
      <?php mospathway() ?>
    </div>
  </div>
  <div class="clear"></div>
  <div id="headmodules">
    <div class="clear"></div>
    <div class="padding">
      <?php if (mosCountModules('advert1')) { ?>
      <div id="advert1">
        <?php mosLoadModules('advert1', -3);?>
      </div>
      <?php } 
    if (mosCountModules('advert2')) { ?>
      <div id="<?php echo $advert2;?>">
        <?php mosLoadModules('advert2', -3);?>
      </div>
      <?php } 
    if (mosCountModules('user1')) { ?>
      <div id="<?php echo $user1?>">
        <?php mosLoadModules('user1', -3);?>
      </div>
      <?php } 
    if (mosCountModules('user2')) { ?>
      <div id="<?php echo $user2?>">
        <?php mosLoadModules('user2', -3);?>
      </div>
      <?php } 
    if (mosCountModules('user5')) { ?>
      <div id="<?php echo $user5?>">
        <?php mosLoadModules('user5', -3);?>
      </div>
      <?php } ?>
    </div>
  </div>
  <div id="mainarea">
    <div id="contentarea">
      <div class="rahmen">
        <div>
          <div>
            <div>
              <div class="padding">
                <?php if (mosCountModules('newsflash')) {
	mosLoadModules('newsflash', -2);
    } 
    mosMainBody(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="leftmodules">
      <div class="padding">
        <?php if (mosCountModules('left')) {
	mosLoadModules('left', -3);
    } ?>
      </div>
    </div>
  </div>
  <div id="rightmodules">
    <div class="padding">
      <?php if (mosCountModules('right')) {
	mosLoadModules('right', -3);
    } ?>
    </div>
  </div>
  <div class="clear"></div>
  <div class="foot">
    <div id="footleft">
      <div id="footright"> </div>
    </div>
    <div id="back">
      <?php include_once('includes/footer.php'); ?>
      <p>Template by </p>
      <a href="http://www.ahadesign.eu">www.Ahadesign.eu</a> 
      </div>
  </div>
  <div id="footermodule">
    <?php if (mosCountModules('footer')) {
	mosLoadModules('footer', -3);
    } ?>
  </div>
</div>
<!-- If you want remove copyright/backlink, please contact us: order@ahadesign.eu or visit http://www.ahadesign.eu. Do not remove without our permission-->
<!-- Wenn Sie den Copyright/Backlink-Hinweis entfernen möchten, kontaktieren Sie uns bitte. Eigenmächtiges entfernen ist nicht gestattet. -->
<?php mosLoadModules( 'debug', -2 );?>
</body>
</html>

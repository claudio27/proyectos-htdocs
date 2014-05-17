<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
$iso = split( '=', _ISO );
echo '<?xml version="1.0" encoding="'. $iso[1] .'"?' .'>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <?php if ( $my->id ) initEditor(); ?>
    <meta http-equiv="Content-Type" content="text/html; <?php echo _ISO; ?>" />
    <?php mosShowHead(); ?>
    <link rel="shortcut icon" href="<?php echo $mosConfig_live_site;?>/templates/a6greyflash/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="<?php echo $mosConfig_live_site; ?>/templates/a6greyflash/css/template_css.css" />
  </head>

<body>
<a name="top" id="top"></a>
<table border="0" align="center" width="750" cellspacing="1" cellpadding="1" bgcolor="#666666">
  <tr>
    <td  bgcolor="#000000">
    <table border="0" width="100%" cellspacing="0" cellpadding="0">
      <tr height="20">
        <td valign="center" align="left" background="<?php echo $mosConfig_live_site;?>/templates/a6greyflash/images/top_bar_back.gif"><strong>&nbsp;&nbsp;<?php include $GLOBALS['mosConfig_absolute_path'] . '/pathway.php'; ?></strong></td>
        <td valign="center" align="right" background="<?php echo $mosConfig_live_site;?>/templates/a6greyflash/images/top_bar_back.gif"><strong><?php echo (strftime ("%d %B %Y", time()+($mosConfig_offset*60*60))); ?>&nbsp;&nbsp;</strong></td>
      </tr>
    </table>
    <table border="0" width="100%" cellspacing="0" cellpadding="0">
      <tr>
        <td background="<?php echo $mosConfig_live_site;?>/templates/a6greyflash/images/logo_back.gif">
          <OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
 				  codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"
 				  WIDTH="746" HEIGHT="75" id="a6greyflash" ALIGN="">
 				<PARAM NAME=movie VALUE="<?php echo $mosConfig_live_site;?>/templates/a6greyflash/a6greyflash.swf?livesite=<?php echo urlencode($mosConfig_sitename);?>"> 
 				<PARAM NAME=quality VALUE=high> 
 				<PARAM NAME=bgcolor VALUE=#003366> 
 				<EMBED src="<?php echo $mosConfig_live_site;?>/templates/a6greyflash/a6greyflash.swf?livesite=<?php echo urlencode($mosConfig_sitename);?>" 
 					   quality=high bgcolor=#003366  WIDTH="746" HEIGHT="75" NAME="a6greyflash" ALIGN=""
 					   TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer">
 			   </EMBED>
		</OBJECT>		
        </td>
      </tr>
    </table>
    <table border="0" width="100%" cellspacing="0" cellpadding="0">
      <tr height="30">
        <td valign="center" align="left" background="<?php echo $mosConfig_live_site;?>/templates/a6greyflash/images/menu_bar_back.gif">
          <?php mosLoadModules ( "user3", "-1" ); ?>
        </td>
      </tr>
    </table>
    <table border="0" width="100%" cellspacing="3" cellpadding="0">
      <tr>
        <!-- LEFT Modules -->
        <?php if (mosCountModules('left')>0) { ?>
          <td width="132" valign="top" bgcolor="#33303C">
          <?php mosLoadModules ( "left" ); ?>
          </td>
        <?php } ?>
        <!-- BANNER modules -->
        <td valign="top" bgcolor="#2c2A35">
          <?php if ( mosCountModules ('banner') ) { ?>
            <center><?php mosLoadModules( 'banner', -1 ); ?></center>
            <?php
          } ?>
        <!-- TOP Modules -->
        <?php if (mosCountModules('top')>0) mosLoadModules ( "top" ); ?>
        <!-- Main Content Section -->
        <?php mosMainBody(); ?>
        </td>
        <!-- RIGHT Modules -->
        <?php
          if (mosCountModules('right')>0) {
            ?>
            <td width="132" valign="top" bgcolor="#33303C">
              <?php mosLoadModules ( "right" ); ?>
            </td>
            <?php
          }
        ?>
      </tr>
    </table>
    <table border="0" width="100%" cellspacing="0" cellpadding="0">
      <tr height="20">
        <td valign="center" align="left" background="<?php echo $mosConfig_live_site;?>/templates/a6greyflash/images/top_bar_back.gif"> </td>
        <td valign="center" align="right" background="<?php echo $mosConfig_live_site;?>/templates/a6greyflash/images/top_bar_back.gif"><a href="#top"><img src="<?php echo $mosConfig_live_site;?>/templates/a6greyflash/images/top_of_page.gif" vspace="5" border="0" alt="Top of Page"></a></td>
      </tr>
    </table>

    </td>
  </tr>
</table>
<center><?php include_once( $GLOBALS['mosConfig_absolute_path'] . '/includes/footer.php' ); ?></center>
</body>
</html>
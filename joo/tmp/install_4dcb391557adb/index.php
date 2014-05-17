<?php defined( "_VALID_MOS" ) or die( "Direct Access to this location is not allowed." );$iso = split( '=', _ISO );echo '<?xml version="1.0" encoding="'. $iso[1] .'"?' .'>';?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<?php mosShowHead(); ?>

<meta http-equiv="Content-Type" content="text/html;><?php echo _ISO; ?>" />

<?php if ( $my->id ) { initEditor(); } ?>

<?php include($GLOBALS['mosConfig_absolute_path']."/templates/247shock_black_104/splitmenu.php"); ?>

<?php echo "<link rel=\"stylesheet\" href=\"$GLOBALS[mosConfig_live_site]/templates/$GLOBALS[cur_template]/css/template_css.css\" type=\"text/css\"/>" ; ?><?php echo "<link rel=\"shortcut icon\" href=\"$GLOBALS[mosConfig_live_site]/<?php echo $mosConfig_live_site;?>/templates/247shock_black_104/images/favicon.ico\" />" ; ?>

<link rel="alternate" title="<?php echo $mosConfig_sitename; ?>" href="<?php echo $GLOBALS['mosConfig_live_site']; ?>/index2.php?option=com_rss&no_html=1" type="application/rss+xml" />

</head>



<body background="<?php echo $mosConfig_live_site;?>/templates/247shock_black_104/images/back.png">

<a name="up" id="up"></a><a id="klick" href="http://www.unaids.org" target="_blank" style="filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $mosConfig_live_site;?>/templates/247shock_black_104/images/247shock.png',sizingMethod='scale');">Help!</a>

	

</div>

<table width="774" border="0" align="center" cellpadding="0" cellspacing="0">

  <tr>

    <td valign="top"><table width="774" height="0" border="0" cellpadding="0" cellspacing="0">

      <tr>

        <td rowspan="2" align="left" valign="top"><img src="<?php echo $mosConfig_live_site;?>/templates/247shock_black_104/images/head_left.png" width="28" height="191" /></td>

        <td valign="top"><table width="718" height="39" border="0" cellpadding="0" cellspacing="0" background="<?php echo $mosConfig_live_site;?>/templates/247shock_black_104/images/head.png">

          <tr>

            <td valign="top"><div align="left" class="date"><?php echo mosCurrentDate(); ?></div></td>

            <td align="right" valign="top"><?php if (mosCountModules('user3')) { ?><table border="0" cellpadding="0" cellspacing="0" style="margin-top: 7px; margin-right: 5px;">

              <tr>

                <td width="8"><div style=" background-image:url(<?php echo $mosConfig_live_site;?>/templates/247shock_black_104/images/top_left.gif); text-align:right">

				<img src="<?php echo $mosConfig_live_site;?>/templates/247shock_black_104/images/top_left.png" style="filter:Alpha(opacity=55, finishopacity=6, style=2)" width="8" height="26" border="0"></div>

				</td>

                <td valign="top" style="background-image: url(<?php echo $mosConfig_live_site;?>/templates/247shock_black_104/images/top_back.png); background-position: right;"><?php mosLoadModules ( 'user3' ); ?></td>

                <td width="8"><img src="<?php echo $mosConfig_live_site;?>/templates/247shock_black_104/images/top_right.png" width="8" height="26" /></td>

              </tr>

            </table><?php } ?></td>

          </tr>

        </table></td>

        <td rowspan="2" align="right" valign="top"><img src="<?php echo $mosConfig_live_site;?>/templates/247shock_black_104/images/head_right.png" width="28" height="191" /></td>

      </tr>

      <tr>

        <td valign="top"><table width="718" height="152"  border="0" cellpadding="0" cellspacing="0" background="<?php echo $mosConfig_live_site;?>/templates/247shock_black_104/images/head_center.png">

          <tr>

            <td valign="top"><table width="718" border="0" cellpadding="0" cellspacing="0">

              <tr>

                <td width="234" height="100" style="padding-left: 8px;" class="title" ><a href="<?php echo $mosConfig_live_site;?>" title="<?php echo $mosConfig_sitename; ?>"><?php echo $mosConfig_sitename; ?></a></td>

                <td width="468" align="right" style="padding-right: 8px;"><table width="468" border="0" align="right" cellpadding="0" cellspacing="4">

                  <tr>

                    <td><?php mosLoadComponent( "banners" ); ?>
</td>

                  </tr>

                </table></td>

              </tr>

              <tr>

                <td colspan="2">



<!-- BEGIN MENU -->

			<div><?php echo $mycssPSPLITmenu_content; ?></div>

<!-- END MENU -->

			<div class="pathway"><?php mosPathWay(); ?></div>

				</td>

              </tr>

            </table></td>

          </tr>

        </table></td>

        </tr>

    </table></td>

  </tr>

  <tr>

    <td valign="top"><table width="774" border="0" cellpadding="0" cellspacing="0" background="<?php echo $mosConfig_live_site;?>/templates/247shock_black_104/images/back_content.png">

      <tr>

        <td align="left" valign="top"><img src="<?php echo $mosConfig_live_site;?>/templates/247shock_black_104/images/left_line.png" width="8" height="141" /><br /></td>

        <td width="758" valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0" style="padding-left: 15px; padding-right: 15px;">

          <tr>

            <td><table width="100%"  border="0" align="center" cellpadding="0" cellspacing="0">

              <tr>

                <td valign="top" style="border-right: 1px solid #DADDD0;"><?php if (mosCountModules('left')) { ?>

                    <table width="180"  border="0" cellpadding="0" cellspacing="0">

                      <tr>

                        <td style="padding:5px;"><?php mosLoadModules ( 'left' ); ?></td>

                      </tr>

                    </table>

                    <?php } ?></td>

                <td style="padding-left: 5px; padding-right: 5px; padding-top:5px; border-left: 1px solid #FFF; border-right: 1px solid #FFF;" width="100%" valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">

                    <tr valign="top">

                      <?php if (mosCountModules('top')) { ?>

                      <td colspan="3">

                        <div>

                          <?php mosLoadModules ( 'top' ); ?>

                          

</div></td>

                      <?php } ?>

                    </tr>

                    <tr>

                      <?php if (mosCountModules('user1')) { ?>

                      <td valign="top"><div>

                          <?php mosLoadModules ( 'user1' ); ?>

                      </div></td>

                      <td width="2" valign="top">

                        <?php } ?>

                        <?php if (mosCountModules('user2')) { ?>

                      </td>

                      <td valign="top"><div>

                          <?php mosLoadModules ( 'user2' ); ?>

                      </div></td>

                      <?php } ?>

                    </tr>

                    <tr>

                      <td height="4" colspan="3"><table width="100%"  border="0" cellspacing="0" cellpadding="0">

                          <tr>

                            <td><img src="<?php echo $mosConfig_live_site;?>/templates/247shock_black_104/images/space.gif"  width="100" height="4" /></td>

                          </tr>

                      </table></td>

                    </tr>

                    <tr align="left" valign="top">

                      <td colspan="3"><?php mosMainBody(); ?></td>

                    </tr>

                    <tr>

                      <td colspan="3"><table width="100%"  border="0" cellspacing="0" cellpadding="0">

                          <tr>

                            <td><img src="<?php echo $mosConfig_live_site;?>/templates/247shock_black_104/images/space.gif"  width="100" height="4" /></td>

                          </tr>

                      </table></td>

                    </tr>

                    <tr valign="top">

                      <?php if (mosCountModules('user6')) { ?>

                      <td colspan="3">

                        <div>

                          <?php mosLoadModules ( 'user6' ); ?>

                      </div></td>

                      <?php } ?>

                    </tr>

                  </table>

                    </td>

                <td valign="top" style="border-left: 1px solid #DADDD0;"><?php if (mosCountModules('right')) { ?>

                    <table width="180"  border="0" cellpadding="0" cellspacing="0">

                      <tr>

                        <td style="padding: 5px;"><?php mosLoadModules ( 'right' ); ?></td>

                      </tr>

                    </table>

                    <?php } ?></td>

              </tr>

            </table></td>

          </tr>

        </table></td>

        <td align="right" valign="top"><img src="<?php echo $mosConfig_live_site;?>/templates/247shock_black_104/images/right_line.png" width="8" height="141" /></td>

      </tr>

    </table></td>

  </tr>

  <tr>

    <td valign="top"><table width="774" height="46" border="0" cellpadding="0" cellspacing="0" background="<?php echo $mosConfig_live_site;?>/templates/247shock_black_104/images/bottom.png">

      <tr>

        <td align="center" valign="top"><img src="<?php echo $mosConfig_live_site;?>/templates/247shock_black_104/images/space.gif"  width="46" height="46" border="0" usemap="#Map" /></td>

      </tr>

    </table>

      <table width="774" border="0" cellpadding="0" cellspacing="10" class="footer">

        <tr>

          <td valign="top">            <div align="center">

                <?php include_once('includes/footer.php'); ?>

            Design by <a href="http://www.joomlateam.com" target="_blank">jommlateam.com</a>  | Powered by <a href="http://www.limboportal.com" target="_blank">Limboportal.com</a>

          </div></td>

        </tr>

      </table></td>

  </tr>

</table>

<br />

<map name="Map" id="Map">

  <area shape="circle" coords="25,23,12" href="#up" alt="Top!" />

</map>

</body>

</html>
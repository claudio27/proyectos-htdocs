<?php
/*
# ------------------------------------------------------------------------
# JA T3 System plugin for Joomla 1.6
# ------------------------------------------------------------------------
# Copyright (C) 2004-2009 J.O.O.M Solutions Co., Ltd. All Rights Reserved.
# @license - GNU/GPL, http://www.gnu.org/licenses/gpl.html
# Author: J.O.O.M Solutions Co., Ltd
# Websites: http://www.joomlart.com - http://www.joomlancers.com
# ------------------------------------------------------------------------
*/
?>
<div class="ja-copyright">
	<jdoc:include type="modules" name="footer" />
</div>

<?php if($this->countModules('footnav')) : ?>
<div class="ja-footnav">
	<jdoc:include type="modules" name="footnav" />
</div>
<?php endif; ?>


<?php 
$t3_logo = $this->getParam ('setting_t3logo', 't3-logo-light', 't3-logo-dark');
if ($t3_logo != 'none') : ?>
<div id="ja-poweredby" class="<?php echo $t3_logo ?>">
	<a href="http://t3.joomlart.com" title="Powered By T3 Framework" target="_blank">Powered By T3 Framework</a>
</div>  	
<?php endif; ?>

  <p>
            	<a style="color:black;text-indent:0; background:none;" href="http://www.jm-experts.com/free-joomla-templates" target="_blank">Joomla 1.6 Templates </a>by <a href="http://www.jm-experts.com" target="_blank">Jm-Experts</a>!
    </p>

<?php
if (class_exists('T3Template')) {
	$tmpl = T3Template::getInstance();
	$tmpl->setTemplate($this);
	$tmpl->render();
	return;
} else {
	//Need to install or enable Jm-Biz Plugin
	echo JText::_('Missing Jm-biz Blue framework plugin');
}

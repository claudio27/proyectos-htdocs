<?php
/**
 * @version		$Id: router.php 20759 2011-02-18 04:45:08Z dextercowley $
 * @package		Joomla.Site
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

/**
 * @param	array
 * @return	array
 */
function SearchBuildRoute(&$query)
{
	$segments = array();

	if (isset($query['view'])) {
		unset($query['view']);
	}
	return $segments;
}

/**
 * @param	array
 * @return	array
 */
function SearchParseRoute($segments)
{
	$vars = array();

	$searchword	= array_shift($segments);
	$vars['searchword'] = $searchword;
	$vars['view'] = 'search';

	return $vars;
}

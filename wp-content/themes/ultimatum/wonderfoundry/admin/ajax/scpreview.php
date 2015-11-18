<?php
/*
 WARNING: This file is part of the core Ultimatum framework. DO NOT edit
this file under any circumstances.
*/

/**
 *
 * This file is a core Ultimatum file and should not be edited.
 *
 * @category Ultimatum
 * @package  Templates
 * @author   Wonder Foundry http://www.wonderfoundry.com
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     http://ultimatumtheme.com
 * @version 2.38
 */
$shortcode = '['.$_GET['type'].' ';
foreach ($_GET as $p=>$v){
	if($p!="type" && $p!="uscpreviewcode"){
		$shortcode .= $p.'="'.$v.'" ';
	}
}

$shortcode .= ']test[/'.$_GET['type'].']';

echo do_shortcode($shortcode);

<?php

use Tygh\Settings;
use Tygh\BlockManager\Layout;

if(!defined('BOOTSTRAP')) {die('Access denied');}

function fn_get_logo_simple($company_id = 0, $type = 'theme') {
	
	$theme = Settings::instance($company_id)->getValue('theme_name', '');
	$layout_data = Layout::instance($company_id)->getDefault($theme);
	
	$logo_id = db_get_field("SELECT logo_id FROM ?:logos WHERE company_id = ?s AND type = ?s AND layout_id = ?s AND style_id = ?s", $company_id, $type, $layout_data['layout_id'], $layout_data['style_id']);
	
	$image_id = db_get_field("SELECT image_id FROM ?:images_links WHERE object_type = 'logos' AND object_id = ?s", $logo_id);
	
	$logo = fn_get_image($image_id, 'logos');
	
	return $logo;
}

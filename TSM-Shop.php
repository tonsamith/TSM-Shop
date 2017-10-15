<?php
/*
Plugin Name: TSM SHOP
Plugin URI: https//www.tonsamith.com
Description: This is a great pluign used for recent posts and it is great to post randomly with the newest technology.
Version: 1.0.0
Author: TON SAMITH
Author URI: https://www.tonsamith.com/
Text Domain: TSM-Shop
Copyright: 2007-2018, TON SAMITH
*/



register_activation_hook( TSM_Shop_Plugin_Slug, create_function( '', 'require_once( MEPR_LIB_PATH . "/activation.php");' ) );
register_deactivation_hook( TSM_Shop_Plugin_Slug, create_function( '', 'require_once( MEPR_LIB_PATH . "/deactivation.php");' ) );
//register_uninstall_hook( TSM_Shop_Plugin_Slug, create_function( '', 'require_once( MEPR_PATH . "/uninstall.php");' ) );

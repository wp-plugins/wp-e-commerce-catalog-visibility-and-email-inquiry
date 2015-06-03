<?php
/*
Plugin Name: WP e-Commerce Catalog Visibility Email inquiry LITE
Plugin URI: http://a3rev.com/shop/catalog-visibilty-and-email-inquiry/
Description: Remove add to cart function from all products on your WP e-Commerce store. Apply to all not logged in users and individually apply to any logged in user role. Add product email inquiry button or hyperlink text to all or any product with fully mobile responsive pop-up email inquiry form.
Version: 1.2.3
Author: A3 Revolution
Author URI: http://www.a3rev.com/
License: This software is under commercial license and copyright to A3 Revolution Software Development team

	WP e-Commerce Catalog Visibility Email inquiry. Plugin for the WP e-Commerce shopping Cart.
	Copyright© 2011 A3 Revolution Software Development team

	A3 Revolution Software Development team
	admin@a3rev.com
	PO Box 1170
	Gympie 4570
	QLD Australia
*/
?>
<?php
define('WPEC_PCF_FILE_PATH', dirname(__FILE__));
define('WPEC_PCF_DIR_NAME', basename(WPEC_PCF_FILE_PATH));
define('WPEC_PCF_FOLDER', dirname(plugin_basename(__FILE__)));
define('WPEC_PCF_URL', untrailingslashit(plugins_url('/', __FILE__)));
define('WPEC_PCF_DIR', WP_PLUGIN_DIR . '/' . WPEC_PCF_FOLDER);
define('WPEC_PCF_NAME', plugin_basename(__FILE__));
define('WPEC_PCF_IMAGES_URL', WPEC_PCF_URL . '/assets/images');
define('WPEC_PCF_JS_URL', WPEC_PCF_URL . '/assets/js');
define('WPEC_PCF_CSS_URL', WPEC_PCF_URL . '/assets/css');
if (!defined("WPEC_PCF_AUTHOR_URI")) define("WPEC_PCF_AUTHOR_URI", "http://a3rev.com/shop/catalog-visibilty-and-email-inquiry/");

include ('admin/admin-ui.php');
include ('admin/admin-interface.php');

include ('admin/admin-pages/admin-rules-roles-page.php');
include ('admin/admin-pages/admin-email-inquiry-page.php');

include ('admin/admin-init.php');
include ('admin/less/sass.php');

include ('classes/class-pcf-functions.php');
include ('classes/class-pcf-hook.php');
include ('classes/class-pcf-metabox.php');

include ('admin/pcf-init.php');

/**
 * Call when the plugin is activated and deactivated
 */
register_activation_hook(__FILE__, 'wpec_pcf_install');

function wpec_email_inquiry_lite_uninstall()
{
    if (get_option('wpec_email_inquiry_lite_clean_on_deletion') == 1) {

        delete_option('wpec_email_inquiry_rules_roles_settings');
        delete_option('wpec_email_inquiry_global_settings');
        delete_option('wpec_email_inquiry_contact_form_settings');
        delete_option('wpec_email_inquiry_customize_email_popup');
        delete_option('wpec_pcf_contact_success');
        delete_option('wpec_email_inquiry_customize_email_button');

        delete_option('wpec_email_inquiry_lite_clean_on_deletion');
    }
}
if (get_option('wpec_email_inquiry_lite_clean_on_deletion') == 1) {
    register_uninstall_hook(__FILE__, 'wpec_email_inquiry_lite_uninstall');
}
?>

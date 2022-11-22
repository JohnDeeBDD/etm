<?php
/**
 * Plugin Name: EmailTunnelMothership
 * Plugin URI:
 * Description:
 * Donate Link:
 * Author:
 * Version: 0.1
 * Author URI:
 * Text Domain: general-chicken
 */

namespace ETM;


//die("email-tunnel");

require_once (plugin_dir_path(__FILE__). 'src/ETM/autoloader.php');

require_once (plugin_dir_path(__FILE__). 'src/ETM/GeneralChicken_CPT.php');

\add_shortcode('EMT_Settings', 'ETM\register_my_custom_submenu_page');

function register_my_custom_submenu_page() {
    $SettingsPage = new SettingsPage;
    $SettingsPage->render();
}


add_action ('rest_api_init', [new API, 'doRegisterRoutes']);
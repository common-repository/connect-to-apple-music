<?php
/*
 * Plugin Name: Connect to Apple Music
 * Plugin URI: https://github.com/alleyinteractive/apple-music
 * Description: Search Apple Music and embed content in your site.
 * Version: 1.0.0
 * Author: Alley Interactive
 * Author URI: http://www.alleyinteractive.com/
 * Text Domain: connect-to-apple-music
 * Domain Path: lang/
*/

namespace Apple_Music;

define( __NAMESPACE__ . '\PATH', __DIR__ );

define( 'CTAM_PLUGIN_DIR_URL', plugin_dir_url( __FILE__ ) );
define( 'APPLE_MUSIC_VERSION', '1.0.0' );

require_once PATH . '/php/autoload.php';
require_once PATH . '/php/includes/includes.php';

add_action(
	 'plugins_loaded',
	function () {
		new Apple_Music_I18n;
		new Media_Modal;
		new Shortcode;
		new Settings;
		new Block;
	}
);

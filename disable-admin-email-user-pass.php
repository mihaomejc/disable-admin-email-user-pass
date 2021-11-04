<?php
/**
 * Disable admin email on user password change
 * 
 * This plugin will stop the following email from being sent to the Administrator's Email in Settings > General:
 * From: WordPress <wordpress@example.com>
 * To: admin@example.com
 * Subject: [WordPress] Password Changed
 * Password changed for user: username
 * Suppressing this email notification has to handled with a plugin because pluggable.php is loaded earlier than a theme's functions.php file.
 * 
 * Plugin Name:       Disable admin email on user password change
 * Plugin URI:        https://www.mihaomejc.com
 * Description:       An extra tiny plugin to disable admin email on user password change.
 * Version:           1.0.0
 * Author:            Miha Omejc
 * Author URI:        https://www.mihaomejc.com
 * License:           GPL-3.0
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */

if ( ! function_exists( 'wp_password_change_notification' ) ) {
    function wp_password_change_notification( $user ) {
        return;
    }
}
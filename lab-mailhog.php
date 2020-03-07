<?php
/**
 * Plugin Name: Lab Mailhog
 * Description: This plugin routes your emails to MailHog for development with Docker.
 * Plugin URI: https://labarta.es
 * Author: Labarta
 * Author URI: https://labarta.es
 * Version: 1.0
 * License: GPL2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */


if ( ! defined( 'WPINC' ) ) {
	die;
}


add_action( 'phpmailer_init', 'setup' );
function setup( PHPMailer $phpmailer ) {
    $phpmailer->Host = 'host.docker.internal';
    $phpmailer->Port = 1025;
    $phpmailer->IsSMTP();
}
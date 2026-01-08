<?php
/**
 * Plugin Name: Simple Notice Board
 * Description: A basic WordPress plugin to add admin notices securely.
 * Version: 1.0
 * Author: Arush Dwivedi
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Add admin notice
function snb_admin_notice() {
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }

    $message = 'Welcome to Simple Notice Board plugin.';
    echo '<div class="notice notice-success is-dismissible"><p>' . esc_html( $message ) . '</p></div>';
}
add_action( 'admin_notices', 'snb_admin_notice' );

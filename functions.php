<?php

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}



function ms_styles_and_scripts() {
  // Enqueue Styles
  wp_enqueue_style( 'ms-main-styles', get_theme_file_uri('/build/index.css' ), array(), '1.0.0' );

  // Enqueue Scripts
  wp_enqueue_script('ms-main-js', get_theme_file_uri('/build/index.js'), array(), '1.0.0', true);

    // for site search
  wp_localize_script( 'ms-main-js', 'ms_data', array(
    'root_url' => get_site_url(),
    'nonce' => wp_create_nonce('wp_rest'),
  ));
}

add_action( 'wp_enqueue_scripts', 'ms_styles_and_scripts' );

function fb_franchising_theme_support() {
  add_theme_support('post-thumbnails');
}

add_action( 'after_setup_theme', 'fb_franchising_theme_support');

// custom wpforms redirect based on qualified leads
add_filter('wpforms_process_redirect_url', function($url, $form_id, $fields) {
    if ((int) $form_id !== 655) return $url;

    // Liquid capital question (field ID #33)
    $liquid_capital = isset($fields[33]['value']) ? $fields[33]['value'] : '';

    if ($liquid_capital === 'Yes') {
        return home_url('/thank-you-lead-form/?q=1');
    }

    return home_url('/thank-you-lead-form/');
}, 10, 3);
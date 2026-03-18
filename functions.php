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
add_action('wpforms_process_complete', function($fields, $entry, $form_data, $entry_id) {
    $target_forms = [65, 310];
    
    if (!in_array($form_data['id'], $target_forms)) return;

    $net_worth = $fields[15]['value'];
    $liquid    = $fields[16]['value'];

    $nw_qualified = ($net_worth === 'More than $800,000');
    $lq_qualified = (
        $liquid === '$200,000 - $500,000' || 
        $liquid === 'More than $500,000'
    );

    if ($nw_qualified && $lq_qualified) {
        wp_redirect('/thank-you-lead-form/?q=1');
        exit;
    } else {
        wp_redirect('/thank-you-lead-form/');
        exit;
    }
}, 10, 4);
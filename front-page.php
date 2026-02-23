<?php

// Prevent direct file access
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

?>

<?php get_header(); ?>

<?php 

get_template_part('/templates/hero'); 
get_template_part('/templates/reasons'); 
get_template_part('/templates/menu'); 
get_template_part('/templates/meet-the-family'); 
get_template_part('/templates/testimonials'); 
get_template_part('/templates/reviews'); 
get_template_part('/templates/available-territories'); 
get_template_part('/templates/steps-to-ownership'); 
get_template_part('/templates/faq'); 
get_template_part('/templates/support'); 
get_template_part('/templates/contact'); 

?>

<?php get_footer(); ?>
<?php

// Prevent direct file access
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}


get_header();
get_template_part('templates/header-page');
?>


<style>
    .thank-you-container {
        margin-top: 4rem;
        margin-bottom: 4rem;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 60vh;
        text-align: center;
        padding: 1rem;
    }
    .thank-you-content {
        max-width: 600px;
        padding: 20px;
        background: #fff;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
    }
    .thank-you-content h1 {
        color: #333;
        font-size: 2.5rem;
    }
    .thank-you-content p {
        font-size: 1.2rem;
        color: #666;
    }
    .btn {
        display: inline-block;
        margin-top: 15px;
        padding: 10px 20px;
        background-color: #5c3896;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
    }
    .btn:hover {
        color: #fff;
        background-color:rgb(73, 45, 119);
    }
</style>

<section class="thank-you-container">
    <div class="thank-you-content">
        <p>Your submission has been received. We’ll get back to you shortly.</p>
        <a href="<?php echo home_url(); ?>" class="btn">Return to Homepage</a>
    </div>
</section>


<?php
get_footer();
?>
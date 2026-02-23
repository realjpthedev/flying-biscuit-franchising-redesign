<?php
/**
 * Template Name: Privacy Policy
 * The Flying Biscuit Café — Franchising
 * v1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

get_header();
?>

<main class="privacy-page" id="main-content">

  <!-- ─── HERO ─── -->
  <section class="privacy-page__hero">
    <div class="privacy-page__hero-inner">
      <p class="privacy-page__eyebrow">Legal</p>
      <h1 class="privacy-page__hero-title">Privacy Policy</h1>
      <p class="privacy-page__hero-desc">
        How we collect, use, and protect your information.
      </p>
    </div>
  </section>

  <!-- ─── CONTENT ─── -->
  <section class="privacy-page__body">
    <div class="privacy-page__body-inner">
      <div class="privacy-page__prose">
        <?php
        while ( have_posts() ) :
          the_post();
          the_content();
        endwhile;
        ?>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
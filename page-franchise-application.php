<?php
/**
 * Template Name: Franchise Application
 * The Flying Biscuit Café — Franchising
 * v1.0
 */

// Prevent direct file access
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

get_header();
?>

<main class="application" id="main-content">

  <!-- ─── HERO ─── -->
  <section class="application__hero">
    <div class="application__hero-inner">
      <p class="application__eyebrow">Franchise Application</p>
      <h1 class="application__hero-title">
        Franchise <span class="application__accent">Application</span>
      </h1>
      <p class="application__hero-desc">
        Ready to move forward? Complete the application below and our franchise development team will be in touch within 1–2 business days to discuss next steps.
      </p>
    </div>
  </section>

  <!-- ─── FORM + SIDEBAR ─── -->
  <section class="application__body">
    <div class="application__body-inner">

      <!-- Form card -->
      <div class="application__form-card">
        <div class="application__form-embed">
          <?php echo do_shortcode( '[wpforms id="322"]' ); ?>
        </div>
      </div>

      <!-- Sidebar -->
      <aside class="application__sidebar">

        <!-- What to expect -->
        <div class="application__sidebar-card">
          <h3 class="application__sidebar-title">What Happens Next?</h3>
          <ol class="application__sidebar-steps">
            <li class="application__sidebar-step">
              <span class="application__sidebar-step-num">1</span>
              <div class="application__sidebar-step-body">
                <span class="application__sidebar-step-title">We Review Your Application</span>
                <span class="application__sidebar-step-desc">Our team evaluates your background, financials, and target market.</span>
              </div>
            </li>
            <li class="application__sidebar-step">
              <span class="application__sidebar-step-num">2</span>
              <div class="application__sidebar-step-body">
                <span class="application__sidebar-step-title">FDD Review via Zoom</span>
                <span class="application__sidebar-step-desc">Daryl joins Andrew to walk through the Franchise Disclosure Document and answer your questions.</span>
              </div>
            </li>
            <li class="application__sidebar-step">
              <span class="application__sidebar-step-num">3</span>
              <div class="application__sidebar-step-body">
                <span class="application__sidebar-step-title">Discovery Day &amp; Agreement</span>
                <span class="application__sidebar-step-desc">Visit our Atlanta HQ, meet the team, tour a unit — then finalize the franchise agreement.</span>
              </div>
            </li>
          </ol>
        </div>

        <!-- Contact card -->
        <div class="application__sidebar-card application__sidebar-card--dark">
          <h3 class="application__sidebar-title application__sidebar-title--light">Have Questions?</h3>
          <p class="application__sidebar-text">Talk to our franchise development team before applying.</p>
          <div class="application__sidebar-contact">
            <a href="tel:6787261884" class="application__sidebar-link">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
              (678) 726-1884
            </a>
            <a href="mailto:franchise@flyingbiscuit.com" class="application__sidebar-link">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
              franchise@flyingbiscuit.com
            </a>
          </div>
          <a href="/contact/" class="application__sidebar-btn">Contact Us</a>
        </div>

      </aside>

    </div>
  </section>

</main>

<?php get_footer(); ?>
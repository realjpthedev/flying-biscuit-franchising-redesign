<?php
/**
 * Template Name: Lease Signing Information
 * The Flying Biscuit Café — Franchising
 * v1.0
 */

// Prevent direct file access
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

get_header();
?>

<main class="partner-info" id="main-content">

  <!-- ─── HERO ─── -->
  <section class="partner-info__hero">
    <div class="partner-info__hero-inner">
      <p class="partner-info__eyebrow">Lease Signed</p>
      <h1 class="partner-info__hero-title">
        New Location <span class="partner-info__accent">Information</span>
      </h1>
      <p class="partner-info__hero-desc">
        Congratulations on signing your lease! Please complete the form below so we have everything we need to kick off the next phase of your build-out.
      </p>
    </div>
  </section>

  <!-- ─── FORM + SIDEBAR ─── -->
  <section class="partner-info__body">
    <div class="partner-info__body-inner">

      <!-- Form card -->
      <div class="partner-info__form-card">
        <div class="partner-info__form-sections">

          <div class="partner-info__section-intro">
            <h2 class="partner-info__section-title">What We Need From You</h2>
            <p class="partner-info__section-desc">Now that your lease is signed, we need a few details about your new location and the brokers involved. This helps us coordinate design, permitting, and your build-out timeline.</p>
          </div>

          <div class="partner-info__checklist">
            <h3 class="partner-info__checklist-title">You'll Be Asked About</h3>
            <ul class="partner-info__checklist-list">
              <li class="partner-info__checklist-item">
                <span class="partner-info__checklist-icon" aria-hidden="true">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                </span>
                <span>Your name and business partner info</span>
              </li>
              <li class="partner-info__checklist-item">
                <span class="partner-info__checklist-icon" aria-hidden="true">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                </span>
                <span>The location address and what attracted you to the site</span>
              </li>
              <li class="partner-info__checklist-item">
                <span class="partner-info__checklist-icon" aria-hidden="true">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                </span>
                <span>Tenant broker and listing broker contact details</span>
              </li>
              <li class="partner-info__checklist-item">
                <span class="partner-info__checklist-icon" aria-hidden="true">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                </span>
                <span>Who you're most excited to serve in the community</span>
              </li>
            </ul>
          </div>

        </div>

        <div class="partner-info__form-embed">
          <?php echo do_shortcode( '[wpforms id="751"]' ); ?>
        </div>
      </div>

      <!-- Sidebar -->
      <aside class="partner-info__sidebar">

        <!-- What happens next -->
        <div class="partner-info__sidebar-card">
          <h3 class="partner-info__sidebar-title">What Happens Next</h3>
          <p class="partner-info__sidebar-text">Once we receive your location details, our team coordinates design, permitting, and construction — so you can focus on hiring and preparing for your grand opening.</p>
          <p class="partner-info__sidebar-text">We'll be in touch shortly after you submit.</p>
        </div>

        <!-- Have your broker info ready -->
        <div class="partner-info__sidebar-card">
          <h3 class="partner-info__sidebar-title">Have Ready</h3>
          <ul class="partner-info__sidebar-list">
            <li>Your signed lease address</li>
            <li>Tenant broker name, company, phone, and email</li>
            <li>Listing broker name, company, phone, and email</li>
          </ul>
        </div>

        <!-- Contact card -->
        <div class="partner-info__sidebar-card partner-info__sidebar-card--dark">
          <h3 class="partner-info__sidebar-title partner-info__sidebar-title--light">Need Help?</h3>
          <p class="partner-info__sidebar-text partner-info__sidebar-text--light">Questions about your lease or next steps? Reach out anytime.</p>
          <div class="partner-info__sidebar-contact">
            <a href="tel:6787261884" class="partner-info__sidebar-link">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
              (678) 726-1884
            </a>
            <a href="mailto:franchise@flyingbiscuit.com" class="partner-info__sidebar-link">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
              franchise@flyingbiscuit.com
            </a>
          </div>
        </div>

      </aside>

    </div>
  </section>

</main>

<?php get_footer(); ?>
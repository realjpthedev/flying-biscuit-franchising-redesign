<?php
/**
 * Template Name: Franchise Partner Information
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
      <p class="partner-info__eyebrow">Construction Phase</p>
      <h1 class="partner-info__hero-title">
        Franchise Partner <span class="partner-info__accent">Information</span>
      </h1>
      <p class="partner-info__hero-desc">
        Your Flying Biscuit is on its way! Please complete the form below so we can start building your story alongside your restaurant.
      </p>
    </div>
  </section>

  <!-- ─── FORM + SIDEBAR ─── -->
  <section class="partner-info__body">
    <div class="partner-info__body-inner">

      <!-- Form card -->
      <div class="partner-info__form-card">
        <div class="partner-info__form-sections">

          <!-- Section 1: About You -->
          <div class="partner-info__section-intro">
            <h2 class="partner-info__section-title">What to Expect</h2>
            <p class="partner-info__section-desc">While your location is being built out, we're preparing to introduce you to your community. This form helps us gather everything we need to build your franchisee profile, prepare grand opening marketing, and get your story ready to tell.</p>
          </div>

          <div class="partner-info__checklist">
            <h3 class="partner-info__checklist-title">You'll Be Asked About</h3>
            <ul class="partner-info__checklist-list">
              <li class="partner-info__checklist-item">
                <span class="partner-info__checklist-icon" aria-hidden="true">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                </span>
                <span>Your name, partner info, and location address</span>
              </li>
              <li class="partner-info__checklist-item">
                <span class="partner-info__checklist-icon" aria-hidden="true">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                </span>
                <span>Hiring status and projected opening date</span>
              </li>
              <li class="partner-info__checklist-item">
                <span class="partner-info__checklist-icon" aria-hidden="true">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                </span>
                <span>Construction photos — both vertical and horizontal</span>
              </li>
              <li class="partner-info__checklist-item">
                <span class="partner-info__checklist-icon" aria-hidden="true">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                </span>
                <span>Anything else you'd like people to know about you and your team</span>
              </li>
            </ul>
          </div>

        </div>

        <div class="partner-info__form-embed">
          <?php echo do_shortcode( '[wpforms id="710"]' ); ?>
        </div>
      </div>

      <!-- Sidebar -->
      <aside class="partner-info__sidebar">

        <!-- Why we ask -->
        <div class="partner-info__sidebar-card">
          <h3 class="partner-info__sidebar-title">Why We Ask</h3>
          <p class="partner-info__sidebar-text">While your restaurant is being built, we're building your brand presence. We use this information to create your franchisee profile, prepare grand opening marketing, and introduce you to your community as a Flying Biscuit owner.</p>
          <p class="partner-info__sidebar-text">The more detail you provide, the better we can tell your story.</p>
        </div>

        <!-- Photo tips -->
        <div class="partner-info__sidebar-card">
          <h3 class="partner-info__sidebar-title">Photo Tips</h3>
          <ul class="partner-info__sidebar-list">
            <li>Include both vertical and horizontal shots</li>
            <li>Capture the buildout progress — framing, signage, equipment</li>
            <li>Use natural lighting when possible</li>
            <li>Wide shots of the full space help tell the story</li>
          </ul>
        </div>

        <!-- Contact card -->
        <div class="partner-info__sidebar-card partner-info__sidebar-card--dark">
          <h3 class="partner-info__sidebar-title partner-info__sidebar-title--light">Need Help?</h3>
          <p class="partner-info__sidebar-text partner-info__sidebar-text--light">Questions about the form or what to include? Reach out anytime.</p>
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
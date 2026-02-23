<?php
/**
 * 404 Error Page
 * The Flying Biscuit Café — Franchising
 * v1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

get_header();
?>

<main class="error-page" id="main-content">

  <!-- ─── HERO ─── -->
  <section class="error-page__hero">

    <!-- Floating crumbs (decorative) -->
    <div class="error-page__crumbs" aria-hidden="true">
      <span class="error-page__crumb error-page__crumb--1"></span>
      <span class="error-page__crumb error-page__crumb--2"></span>
      <span class="error-page__crumb error-page__crumb--3"></span>
      <span class="error-page__crumb error-page__crumb--4"></span>
      <span class="error-page__crumb error-page__crumb--5"></span>
      <span class="error-page__crumb error-page__crumb--6"></span>
    </div>

    <div class="error-page__hero-inner">

      <!-- Big 404 -->
      <div class="error-page__code" aria-hidden="true">
        <span class="error-page__digit">4</span>
        <span class="error-page__digit error-page__digit--biscuit">
          <!-- Inline SVG biscuit icon -->
          <svg viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg" class="error-page__biscuit-svg">
            <circle cx="60" cy="60" r="56" fill="currentColor" opacity="0.15"/>
            <circle cx="60" cy="60" r="48" fill="currentColor" opacity="0.25"/>
            <circle cx="60" cy="60" r="40" stroke="currentColor" stroke-width="3" fill="none"/>
            <!-- Steam lines -->
            <path d="M42 28c0-8 4-12 0-18" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" class="error-page__steam error-page__steam--1"/>
            <path d="M60 24c0-8 4-12 0-18" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" class="error-page__steam error-page__steam--2"/>
            <path d="M78 28c0-8 4-12 0-18" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" class="error-page__steam error-page__steam--3"/>
            <!-- Biscuit texture dots -->
            <circle cx="48" cy="56" r="3" fill="currentColor" opacity="0.4"/>
            <circle cx="60" cy="48" r="3" fill="currentColor" opacity="0.4"/>
            <circle cx="72" cy="56" r="3" fill="currentColor" opacity="0.4"/>
            <circle cx="54" cy="68" r="3" fill="currentColor" opacity="0.4"/>
            <circle cx="66" cy="68" r="3" fill="currentColor" opacity="0.4"/>
            <circle cx="60" cy="80" r="3" fill="currentColor" opacity="0.4"/>
          </svg>
        </span>
        <span class="error-page__digit">4</span>
      </div>

      <!-- Copy -->
      <h1 class="error-page__title">
        This Page <span class="error-page__accent">Flew the Coop</span>
      </h1>
      <p class="error-page__desc">
        Looks like this page crumbled away. Don't worry — there are plenty of warm biscuits waiting for you elsewhere.
      </p>


    </div>
  </section>

  <!-- ─── QUICK LINKS ─── -->
  <section class="error-page__links">
    <div class="error-page__links-inner">
      <p class="error-page__links-label">Or try one of these:</p>
      <div class="error-page__links-grid">

        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="error-page__link-card">
          <div class="error-page__link-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
              <polyline points="9 22 9 12 15 12 15 22"/>
            </svg>
          </div>
          <span class="error-page__link-title">Home</span>
          <span class="error-page__link-desc">Back to the beginning</span>
        </a>

        <a href="/why-us/" class="error-page__link-card">
          <div class="error-page__link-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
            </svg>
          </div>
          <span class="error-page__link-title">Why Us</span>
          <span class="error-page__link-desc">The Flying Biscuit difference</span>
        </a>

        <a href="/our-menu/" class="error-page__link-card">
          <div class="error-page__link-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M18 8h1a4 4 0 0 1 0 8h-1"/>
              <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"/>
              <line x1="6" y1="1" x2="6" y2="4"/>
              <line x1="10" y1="1" x2="10" y2="4"/>
              <line x1="14" y1="1" x2="14" y2="4"/>
            </svg>
          </div>
          <span class="error-page__link-title">Our Menu</span>
          <span class="error-page__link-desc">What makes us famous</span>
        </a>

        <a href="/contact/" class="error-page__link-card">
          <div class="error-page__link-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
            </svg>
          </div>
          <span class="error-page__link-title">Contact</span>
          <span class="error-page__link-desc">Let's start a conversation</span>
        </a>

      </div>
    </div>
  </section>

  <!-- ─── CTA ─── -->
  <section class="error-page__cta">
    <div class="error-page__cta-inner">
      <h2 class="error-page__cta-title">
        Ready to <span class="error-page__accent">Own a Biscuit?</span>
      </h2>
      <p class="error-page__cta-desc">
        While you're here, why not explore franchise opportunities with The Flying Biscuit Café?
      </p>
      <div class="error-page__cta-actions">
        <a href="/contact/" class="error-page__cta-btn error-page__cta-btn--primary">
          Get Started
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <line x1="5" y1="12" x2="19" y2="12"/>
            <polyline points="12 5 19 12 12 19"/>
          </svg>
        </a>
        <a href="/available-territories/" class="error-page__cta-btn error-page__cta-btn--secondary">
          View Territories
        </a>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
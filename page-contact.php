<?php
/**
 * Template Name: Contact
 * The Flying Biscuit Café — Franchising
 * Contact Page
 * v1.0
 */

// Prevent direct file access
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}


get_header();
?>

<main class="contact-page" id="main-content">

  <!-- ─── HEADER ─── -->
  <div class="contact-page__header">
    <div class="contact-page__header-inner">
      <p class="contact-page__eyebrow">Contact Us</p>
      <h1 class="contact-page__title">Let's Start a <span class="contact-page__title-accent">Conversation</span></h1>
      <p class="contact-page__desc">Whether you're ready to apply or just exploring your options, we'd love to hear from you.</p>
    </div>
  </div>

  <!-- ─── BODY ─── -->
  <div class="contact-page__body">
    <div class="contact-page__body-inner">

      <!-- Left — Info cards -->
      <div class="contact-page__info">

        <div class="contact-page__card">
          <div class="contact-page__card-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
          </div>
          <div class="contact-page__card-body">
            <h3 class="contact-page__card-title">Call Us</h3>
            <a href="tel:6787261884" class="contact-page__card-link">(678) 726-1884</a>
            <p class="contact-page__card-note">Mon – Fri, 9am – 5pm EST</p>
          </div>
        </div>

        <div class="contact-page__card">
          <div class="contact-page__card-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
          </div>
          <div class="contact-page__card-body">
            <h3 class="contact-page__card-title">Email Us</h3>
            <a href="mailto:franchise@flyingbiscuit.com" class="contact-page__card-link">franchise@flyingbiscuit.com</a>
            <p class="contact-page__card-note">We respond within 24 hours</p>
          </div>
        </div>

        <div class="contact-page__card">
          <div class="contact-page__card-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
          </div>
          <div class="contact-page__card-body">
            <h3 class="contact-page__card-title">Headquarters</h3>
            <span class="contact-page__card-link contact-page__card-link--static">Atlanta, Georgia</span>
            <p class="contact-page__card-note">Franchise Development Office</p>
          </div>
        </div>

        <!-- Social links -->
        <div class="contact-page__social">
          <p class="contact-page__social-label">Follow Us</p>
          <div class="contact-page__social-links">
            <a href="https://www.facebook.com/TheFlyingBiscuitCafe" class="contact-page__social-link" aria-label="Facebook" target="_blank" rel="noopener noreferrer">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
            </a>
            <a href="https://www.instagram.com/flying.biscuit.cafe/" class="contact-page__social-link" aria-label="Instagram" target="_blank" rel="noopener noreferrer">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
            </a>
          </div>
        </div>

      </div>

      <!-- Right — Form card -->
      <div class="contact-page__form-card">
        <div class="contact-page__form-header">
          <h2 class="contact-page__form-title">Send Us a Message</h2>
          <p class="contact-page__form-subtitle">Fill out the form below and our franchise team will be in touch.</p>
        </div>
        <div class="contact-page__form-embed">
          <?php echo do_shortcode('[wpforms id="65" title="false"]'); ?>
        </div>
      </div>

    </div>
  </div>

</main>

<?php get_footer(); ?>
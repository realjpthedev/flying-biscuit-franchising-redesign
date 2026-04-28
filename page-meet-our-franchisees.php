<?php
/**
 * Template Name: Meet Our Franchisees
 * The Flying Biscuit Café — Franchising
 * v1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

get_header();
?>

<main class="franchisees" id="main-content">

  <!-- ─── HERO ─── -->
  <section class="franchisees__hero">
    <div class="franchisees__hero-inner">
      <p class="franchisees__eyebrow">Franchisee Stories</p>
      <h1 class="franchisees__hero-title">
        Meet the People Behind <span class="franchisees__accent">the Biscuits</span>
      </h1>
      <p class="franchisees__hero-desc">
        Don't just take our word for it. Hear directly from franchise owners who are building their dreams with The Flying Biscuit Café.
      </p>
    </div>
  </section>

  <!-- ─── VIDEO TESTIMONIALS ─── -->
  <section class="franchisees__stories">
    <div class="franchisees__stories-inner">

      <div class="franchisees__stories-header">
        <p class="franchisees__section-eyebrow">In Their Own Words</p>
        <h2 class="franchisees__section-title">Hear From Our Owners</h2>
      </div>

      <div class="franchisees__stories-grid">

        <!-- TESTIMONIAL 1 — Mandy Rubenstein -->
        <div class="franchisees__story">
          <div class="franchisees__video" data-youtube-id="0d_Y2HFF5ww">
            <div class="franchisees__video-poster-wrap">
              <img
                src="<?php echo esc_url( get_theme_file_uri( '/assets/img/thumbnails/franchisees/mandy-rubenstein.webp' ) ); ?>"
                alt="Mandy Rubenstein — Flying Biscuit franchisee"
                class="franchisees__video-poster"
                loading="lazy"
              />
            </div>
            <div class="franchisees__video-embed"></div>
            <button class="franchisees__video-play" aria-label="Play Mandy Rubenstein testimonial">
              <span class="franchisees__video-play-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><polygon points="6 3 20 12 6 21 6 3"/></svg>
              </span>
            </button>
          </div>
          <div class="franchisees__story-body">
            <blockquote class="franchisees__quote">
              <p>"Eighteen years in and it still feels like a neighborhood breakfast spot. That community connection never goes away."</p>
            </blockquote>
            <div class="franchisees__story-meta">
              <span class="franchisees__story-name">Mandy Rubenstein</span>
              <span class="franchisees__story-location">Atlanta, GA · 4 Locations</span>
            </div>
          </div>
        </div>

        <!-- TESTIMONIAL 2 — Tahir Rafiq -->
        <div class="franchisees__story">
          <div class="franchisees__video" data-youtube-id="URvlocRXXYE">
            <div class="franchisees__video-poster-wrap">
              <img
                src="<?php echo esc_url( get_theme_file_uri( '/assets/img/thumbnails/franchisees/tahir-rafiq.webp' ) ); ?>"
                alt="Tahir Rafiq — Flying Biscuit franchisee"
                class="franchisees__video-poster"
                loading="lazy"
              />
            </div>
            <div class="franchisees__video-embed"></div>
            <button class="franchisees__video-play" aria-label="Play Tahir Rafiq testimonial">
              <span class="franchisees__video-play-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><polygon points="6 3 20 12 6 21 6 3"/></svg>
              </span>
            </button>
          </div>
          <div class="franchisees__story-body">
            <blockquote class="franchisees__quote">
              <p>"The corporate team gives you 100% support — from managers to POS systems, they've got you covered on everything."</p>
            </blockquote>
            <div class="franchisees__story-meta">
              <span class="franchisees__story-name">Tahir Rafiq</span>
              <span class="franchisees__story-location">Chapel Hill, Cary &amp; Wake Forest, NC</span>
            </div>
          </div>
        </div>

        <!-- TESTIMONIAL 3 — Ariel Esteves -->
        <div class="franchisees__story">
          <div class="franchisees__video" data-youtube-id="S-Mz1TClY5U">
            <div class="franchisees__video-poster-wrap">
              <img
                src="<?php echo esc_url( get_theme_file_uri( '/assets/img/thumbnails/franchisees/ariel-esteves.webp' ) ); ?>"
                alt="Ariel Esteves — Flying Biscuit franchisee"
                class="franchisees__video-poster"
                loading="lazy"
              />
            </div>
            <div class="franchisees__video-embed"></div>
            <button class="franchisees__video-play" aria-label="Play Ariel Esteves testimonial">
              <span class="franchisees__video-play-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><polygon points="6 3 20 12 6 21 6 3"/></svg>
              </span>
            </button>
          </div>
          <div class="franchisees__story-body">
            <blockquote class="franchisees__quote">
              <p>"The support is phenomenal — from staffing to training, they give you every tool you need to succeed."</p>
            </blockquote>
            <div class="franchisees__story-meta">
              <span class="franchisees__story-name">Ariel Esteves</span>
              <span class="franchisees__story-location">Macon &amp; Columbus, GA</span>
            </div>
          </div>
        </div>

        <!-- TESTIMONIAL 4 — Joseph Hsiao -->
        <div class="franchisees__story">
          <div class="franchisees__video" data-youtube-id="-3Pa9CUq7kc">
            <div class="franchisees__video-poster-wrap">
              <img
                src="<?php echo esc_url( get_theme_file_uri( '/assets/img/thumbnails/franchisees/joseph-hsiao.webp' ) ); ?>"
                alt="Joseph Hsiao — Flying Biscuit franchisee"
                class="franchisees__video-poster"
                loading="lazy"
              />
            </div>
            <div class="franchisees__video-embed"></div>
            <button class="franchisees__video-play" aria-label="Play Joseph Hsiao testimonial">
              <span class="franchisees__video-play-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><polygon points="6 3 20 12 6 21 6 3"/></svg>
              </span>
            </button>
          </div>
          <div class="franchisees__story-body">
            <blockquote class="franchisees__quote">
              <p>"This brand started right here in Atlanta. It's a nationally recognized name with a loyal following that keeps growing."</p>
            </blockquote>
            <div class="franchisees__story-meta">
              <span class="franchisees__story-name">Joseph Hsiao</span>
              <span class="franchisees__story-location">Candler Park &amp; Midtown, Atlanta, GA</span>
            </div>
          </div>
        </div>

        <!-- TESTIMONIAL 5 — Larry Bell -->
        <div class="franchisees__story">
          <div class="franchisees__video" data-youtube-id="9MJqsLvSs3Q">
            <div class="franchisees__video-poster-wrap">
              <img
                src="<?php echo esc_url( get_theme_file_uri( '/assets/img/thumbnails/franchisees/larry-bell.webp' ) ); ?>"
                alt="Larry Bell — Flying Biscuit franchisee"
                class="franchisees__video-poster"
                loading="lazy"
              />
            </div>
            <div class="franchisees__video-embed"></div>
            <button class="franchisees__video-play" aria-label="Play Larry Bell testimonial">
              <span class="franchisees__video-play-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><polygon points="6 3 20 12 6 21 6 3"/></svg>
              </span>
            </button>
          </div>
          <div class="franchisees__story-body">
            <blockquote class="franchisees__quote">
              <p>"I've owned several businesses, but the food and the team behind this concept — it's the perfect fit."</p>
            </blockquote>
            <div class="franchisees__story-meta">
              <span class="franchisees__story-name">Larry Bell</span>
              <span class="franchisees__story-location">Johnson City, TN</span>
            </div>
          </div>
        </div>

        <!-- TESTIMONIAL 6 — Nick Panici -->
        <div class="franchisees__story">
          <div class="franchisees__video" data-youtube-id="HvDTJNh0ukU">
            <div class="franchisees__video-poster-wrap">
              <img
                src="<?php echo esc_url( get_theme_file_uri( '/assets/img/thumbnails/franchisees/nick-panici.webp' ) ); ?>"
                alt="Nick Panici — Flying Biscuit franchisee"
                class="franchisees__video-poster"
                loading="lazy"
              />
            </div>
            <div class="franchisees__video-embed"></div>
            <button class="franchisees__video-play" aria-label="Play Nick Panici testimonial">
              <span class="franchisees__video-play-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><polygon points="6 3 20 12 6 21 6 3"/></svg>
              </span>
            </button>
          </div>
          <div class="franchisees__story-body">
            <blockquote class="franchisees__quote">
              <p>"It's not some big corporate machine. It has that homey family feeling — and they give you everything you need."</p>
            </blockquote>
            <div class="franchisees__story-meta">
              <span class="franchisees__story-name">Nick Panici</span>
              <span class="franchisees__story-location">Mobile, AL</span>
            </div>
          </div>
        </div>

        <!-- TESTIMONIAL 7 — Shawn Robinson -->
        <div class="franchisees__story">
          <div class="franchisees__video" data-youtube-id="spzWE6S0X1A">
            <div class="franchisees__video-poster-wrap">
              <img
                src="<?php echo esc_url( get_theme_file_uri( '/assets/img/thumbnails/franchisees/shawn-robinson.webp' ) ); ?>"
                alt="Shawn Robinson — Flying Biscuit franchisee"
                class="franchisees__video-poster"
                loading="lazy"
              />
            </div>
            <div class="franchisees__video-embed"></div>
            <button class="franchisees__video-play" aria-label="Play Shawn Robinson testimonial">
              <span class="franchisees__video-play-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><polygon points="6 3 20 12 6 21 6 3"/></svg>
              </span>
            </button>
          </div>
          <div class="franchisees__story-body">
            <blockquote class="franchisees__quote">
              <p>"We did our homework — the website, the YouTube videos, everything. The more we learned, the more we knew this was the one."</p>
            </blockquote>
            <div class="franchisees__story-meta">
              <span class="franchisees__story-name">Shawn Robinson</span>
              <span class="franchisees__story-location">South Florida</span>
            </div>
          </div>
        </div>

        <!-- TESTIMONIAL 8 — Scott Tallman -->
        <div class="franchisees__story">
          <div class="franchisees__video" data-youtube-id="kuZn_vFY7nA">
            <div class="franchisees__video-poster-wrap">
              <img
                src="<?php echo esc_url( get_theme_file_uri( '/assets/img/thumbnails/franchisees/scott-tallman.webp' ) ); ?>"
                alt="Scott Tallman — Flying Biscuit franchisee"
                class="franchisees__video-poster"
                loading="lazy"
              />
            </div>
            <div class="franchisees__video-embed"></div>
            <button class="franchisees__video-play" aria-label="Play Scott Tallman testimonial">
              <span class="franchisees__video-play-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><polygon points="6 3 20 12 6 21 6 3"/></svg>
              </span>
            </button>
          </div>
          <div class="franchisees__story-body">
            <blockquote class="franchisees__quote">
              <p>"It doesn't feel cookie-cutter. We have our own personality, and the locals and tourists both love it."</p>
            </blockquote>
            <div class="franchisees__story-meta">
              <span class="franchisees__story-name">Scott Tallman</span>
              <span class="franchisees__story-location">Mount Pleasant, SC</span>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ─── STATS BAR ─── -->
  <section class="franchisees__stats">
    <div class="franchisees__stats-inner">

      <div class="franchisees__stat">
        <span class="franchisees__stat-value">30+</span>
        <span class="franchisees__stat-label">Years Serving Smiles</span>
      </div>

      <span class="franchisees__stat-sep" aria-hidden="true"></span>

      <div class="franchisees__stat">
        <span class="franchisees__stat-value">54</span>
        <span class="franchisees__stat-label">Locations Open &amp; In Development</span>
      </div>

      <span class="franchisees__stat-sep" aria-hidden="true"></span>

      <div class="franchisees__stat">
        <span class="franchisees__stat-value">$2M</span>
        <span class="franchisees__stat-label">Average Unit Volume</span>
      </div>

      <span class="franchisees__stat-sep" aria-hidden="true"></span>

      <div class="franchisees__stat">
        <span class="franchisees__stat-value">Moe's</span>
        <span class="franchisees__stat-label">From the Founders of Moe's Southwest Grill</span>
      </div>

    </div>
  </section>

  <!-- ─── PULL QUOTE HIGHLIGHT ─── -->
  <section class="franchisees__highlight">
    <div class="franchisees__highlight-inner">
      <blockquote class="franchisees__highlight-quote">
        <p>"We don't just sell franchises — we build partnerships. Every owner's success is our success."</p>
      </blockquote>
      <div class="franchisees__highlight-attr">
        <img
          src="<?php echo esc_url( get_theme_file_uri( '/assets/img/team/andrew-scherzer.jpg' ) ); ?>"
          alt="Andrew Scherzer"
          class="franchisees__highlight-avatar"
          loading="lazy"
        />
        <div class="franchisees__highlight-info">
          <span class="franchisees__highlight-name">Andrew Scherzer</span>
          <span class="franchisees__highlight-role">Partner, Director of Franchise Development</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ─── CTA + FORM ─── -->
  <section class="franchisees__cta">
    <div class="franchisees__cta-inner">
      <div class="franchisees__cta-content">
        <p class="franchisees__section-eyebrow franchisees__section-eyebrow--dark">Start Your Journey</p>
        <h2 class="franchisees__cta-title">
          Ready to Write Your <span class="franchisees__accent">Own Story?</span>
        </h2>
        <p class="franchisees__cta-desc">
          Join a family of passionate franchise owners. Fill out the form below and our team will reach out to start the conversation.
        </p>
      </div>
      <div class="franchisees__cta-form">
        <div class="franchisees__form-card">
          <h3 class="franchisees__form-title">Request Information</h3>
          <p class="franchisees__form-subtitle">Takes less than 2 minutes.</p>
          <div class="franchisees__form-embed">
            <?php echo do_shortcode( '[wpforms id="310"]' ); ?>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
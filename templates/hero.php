<!-- ============================================
     The Flying Biscuit Café — Franchising
     Hero Component
     v1.0
     ============================================ -->

<section class="hero">

  <!-- Background Illustrations -->
  <div class="hero__bg-art hero__bg-art--smile" aria-hidden="true">
    <img src="<?php echo get_theme_file_uri('/assets/img/smile-graphic.png'); ?>" alt="" />
  </div>
  <div class="hero__bg-art hero__bg-art--wings" aria-hidden="true">
    <img src="<?php echo get_theme_file_uri('/assets/img/wings-graphic.png'); ?>" alt="" />
  </div>
  <div class="hero__bg-art hero__bg-art--biscuit-wings" aria-hidden="true">
    <img src="<?php echo get_theme_file_uri('/assets/img/biscuit_wings.svg'); ?>" alt="" />
  </div>

  <div class="hero__inner">

    <!-- Content -->
    <div class="hero__content">
      <p class="hero__eyebrow">Now Awarding Franchise Territories</p>

      <h1 class="hero__headline">
        <span class="hero__headline-accent">$2 Million</span> Average Sales.
        Home By 3pm.
      </h1>

      <p class="hero__description">
        Build a high-performing business that doesn't run your life. Flying Biscuit
        franchisees serve breakfast and lunch only — so you earn like a full-service
        restaurant and live like you own your schedule.
      </p>

      <a href="/get-started" class="hero__cta">
        Get Started
        <span class="hero__cta-arrow" aria-hidden="true">→</span>
      </a>

      <div class="hero__stats">
        <div class="hero__stat">
          <div class="hero__stat-value">30+</div>
          <div class="hero__stat-label">Years Proven</div>
        </div>
        <div class="hero__stat">
          <div class="hero__stat-value">Breakfast & Lunch</div>
          <div class="hero__stat-label">Daypart Only</div>
        </div>
        <div class="hero__stat">
          <div class="hero__stat-value">40+</div>
          <div class="hero__stat-label">Locations</div>
        </div>
      </div>
    </div>

    <!-- Video -->
    <div
      class="hero__video-wrapper"
      id="heroVideoWrapper"
      data-youtube-id="HrIkyyMyIu8"
    >

      <div class="hero__video-border" aria-hidden="true"></div>

      <!-- Poster image shown before play -->
      <img
        src="<?php echo get_theme_file_uri('/assets/img/thumbnails/hero-video-thumbnail.jpg'); ?>"
        alt=""
        class="hero__video-poster"
        id="heroVideoPoster"
        loading="eager"
      />

      <!-- YouTube iframe injected here on play -->
      <div class="hero__video-embed" id="heroVideoEmbed"></div>

      <!-- Play Button -->
      <button
        class="hero__play-btn"
        id="heroPlayBtn"
        type="button"
        aria-label="Play franchise opportunity video"
      >
        <span class="hero__play-icon"></span>
        <span class="hero__play-label">Watch Our Story</span>
      </button>

      <!-- Close Button (visible during playback) -->
      <button
        class="hero__video-close"
        id="heroVideoClose"
        type="button"
        aria-label="Stop video"
      >
        <span aria-hidden="true">✕</span>
      </button>
    </div>

  </div>

  <!-- Awards Bar -->
  <div class="hero__awards">
    <div class="hero__awards-inner">
      <img src="<?php echo get_theme_file_uri('/assets/img/awards/01.svg'); ?>" alt="Best of Atlanta – INsite Atlanta Edition, November 2017" class="hero__award" loading="lazy" />
      <img src="<?php echo get_theme_file_uri('/assets/img/awards/02.svg'); ?>" alt="Best Restaurants in Atlanta – Zomato 2018" class="hero__award" loading="lazy" />
      <img src="<?php echo get_theme_file_uri('/assets/img/awards/03.svg'); ?>" alt="Entrepreneur – Franchises of the Future, 2019" class="hero__award" loading="lazy" />
      <img src="<?php echo get_theme_file_uri('/assets/img/awards/04.svg'); ?>" alt="Top 50 Emerging Restaurant Chains – FSR Magazine, August 2018" class="hero__award" loading="lazy" />
      <img src="<?php echo get_theme_file_uri('/assets/img/awards/05.svg'); ?>" alt="Entrepreneur Top 200 Food-Based Franchises, 2017" class="hero__award" loading="lazy" />
      <img src="<?php echo get_theme_file_uri('/assets/img/awards/06.svg'); ?>" alt="Entrepreneur Top 200 Food-Based Franchises, 2018" class="hero__award" loading="lazy" />
    </div>
  </div>

</section>
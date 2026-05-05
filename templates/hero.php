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

    <!-- Left: Content + Video -->
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

      <!-- Video (inline within content column) -->
      <div
        class="hero__video-wrapper"
        id="heroVideoWrapper"
        data-youtube-id="-Rn9OIflfB0"
      >
        <div class="hero__video-border" aria-hidden="true"></div>

        <img
          src="<?php echo get_theme_file_uri('/assets/img/thumbnails/franchisees/mandy-rubenstein.webp'); ?>"
          alt=""
          class="hero__video-poster"
          id="heroVideoPoster"
          loading="eager"
        />

        <div class="hero__video-embed" id="heroVideoEmbed"></div>

        <button
          class="hero__play-btn"
          id="heroPlayBtn"
          type="button"
          aria-label="Play franchise opportunity video"
        >
          <span class="hero__play-icon"></span>
          <span class="hero__play-label">Watch Our Story</span>
        </button>

        <button
          class="hero__video-close"
          id="heroVideoClose"
          type="button"
          aria-label="Stop video"
        >
          <span aria-hidden="true">✕</span>
        </button>
      </div>

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

    <!-- Right: Lead Form -->
    <div class="hero__form">
      <div class="hero__form-card" id="heroFormCard">
        <div class="hero__form-intro">
          <img
            src="<?php echo esc_url( get_theme_file_uri( '/assets/img/team/andrew-scherzer.jpg' ) ); ?>"
            alt="Andrew Scherzer"
            class="hero__form-avatar"
            loading="eager"
          />
          <h2 class="hero__form-title">Talk with Andrew</h2>
          <p class="hero__form-role">Partner, Director of Franchise Development</p>
        </div>
        <p class="hero__form-subtitle">Tell us a little about yourself and Andrew will be in touch.</p>
        <div class="hero__form-embed">
          <?php echo do_shortcode( '[wpforms id="310"]' ); ?>
        </div>
      </div>
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
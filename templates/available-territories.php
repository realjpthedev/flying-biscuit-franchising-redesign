<!-- ============================================
     The Flying Biscuit Café — Franchising
     Available Territories Section
     v1.0
     ============================================ -->

<section class="territories">

  <div class="territories__inner">

    <!-- Content -->
    <div class="territories__content">
      <p class="territories__eyebrow">Available Territories</p>
      <h2 class="territories__title">Find Your Market</h2>
      <p class="territories__desc">
        Prime territories are available across the Southeast and beyond.
        With breakfast and lunch demand surging nationwide, now is the time
        to stake your claim in a high-growth market.
      </p>

      <div class="territories__highlights">
        <div class="territories__highlight">
          <span class="territories__highlight-icon" aria-hidden="true">◆</span>
          <div>
            <span class="territories__highlight-label">Southeast Stronghold</span>
            <span class="territories__highlight-detail">GA · NC · SC · FL · TX · TN</span>
          </div>
        </div>
        <div class="territories__highlight">
          <span class="territories__highlight-icon territories__highlight-icon--expand" aria-hidden="true">◆</span>
          <div>
            <span class="territories__highlight-label">Expanding Markets</span>
            <span class="territories__highlight-detail">Mid-Atlantic · Midwest · Southwest</span>
          </div>
        </div>
      </div>

      <a href="/available-territories/" class="territories__cta">
        View All Territories
        <span class="territories__cta-arrow" aria-hidden="true">→</span>
      </a>
    </div>

    <!-- Map -->
    <div class="territories__map-wrapper">

      <!-- Replace this <img> with your own US map SVG for production -->
      <img
        src="<?php echo get_theme_file_uri( '/assets/img/us-map-gray.svg' ); ?>"
        alt="Map of the United States showing available franchise territories"
        class="territories__map-img"
        loading="lazy"
      />

      <!-- Pulsing city markers (positioned via CSS percentages) -->
      <div class="territories__pin territories__pin--atlanta" aria-hidden="true">
        <span class="territories__pin-dot"></span>
        <span class="territories__pin-pulse"></span>
        <span class="territories__pin-label">Atlanta, GA</span>
      </div>

      <div class="territories__pin territories__pin--charlotte" aria-hidden="true">
        <span class="territories__pin-dot"></span>
        <span class="territories__pin-pulse"></span>
        <span class="territories__pin-label">Charlotte, NC</span>
      </div>

      <div class="territories__pin territories__pin--charleston" aria-hidden="true">
        <span class="territories__pin-dot"></span>
        <span class="territories__pin-pulse"></span>
        <span class="territories__pin-label">Charleston, SC</span>
      </div>

      <div class="territories__pin territories__pin--nashville" aria-hidden="true">
        <span class="territories__pin-dot"></span>
        <span class="territories__pin-pulse"></span>
        <span class="territories__pin-label">Nashville, TN</span>
      </div>

      <div class="territories__pin territories__pin--tampa" aria-hidden="true">
        <span class="territories__pin-dot"></span>
        <span class="territories__pin-pulse"></span>
        <span class="territories__pin-label">Tampa, FL</span>
      </div>

      <div class="territories__pin territories__pin--dallas" aria-hidden="true">
        <span class="territories__pin-dot"></span>
        <span class="territories__pin-pulse"></span>
        <span class="territories__pin-label">Dallas, TX</span>
      </div>

      <div class="territories__pin territories__pin--raleigh" aria-hidden="true">
        <span class="territories__pin-dot"></span>
        <span class="territories__pin-pulse"></span>
        <span class="territories__pin-label">Raleigh, NC</span>
      </div>

      <div class="territories__pin territories__pin--houston" aria-hidden="true">
        <span class="territories__pin-dot"></span>
        <span class="territories__pin-pulse"></span>
        <span class="territories__pin-label">Houston, TX</span>
      </div>

    </div>

  </div>
</section>
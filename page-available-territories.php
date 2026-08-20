<?php
/**
 * Template Name: Available Territories
 * The Flying Biscuit Café — Franchising
 * v2.0 — Three-tier market map
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

get_header();
?>

<div class="territories" id="territories-content">

  <!-- ─── HERO ─── -->
  <section class="territories__hero">
    <div class="territories__hero-inner">
      <p class="territories__eyebrow">Franchise Development Markets</p>
      <h1 class="territories__hero-title">Find Your <span class="territories__accent">Territory</span></h1>
      <p class="territories__hero-desc">Focused on the Southeast, Mid-Atlantic, and select Midwest markets. Click any state to learn more.</p>
    </div>
  </section>

  <!-- ─── MAP SECTION ─── -->
  <section class="territories__map-section">
    <div class="territories__map-inner">

      <!-- Color Key -->
      <ul class="territories__color-key">
        <li class="territories__color-key-item">
          <span class="territories__color-key-dot territories__color-key-dot--hot"></span>
          Hot Markets
        </li>
        <li class="territories__color-key-item">
          <span class="territories__color-key-dot territories__color-key-dot--current"></span>
          Current Development
        </li>
        <li class="territories__color-key-item">
          <span class="territories__color-key-dot territories__color-key-dot--future"></span>
          Future Development
        </li>
      </ul>

      <!-- Desktop: map + legend sidebar -->
      <div class="territories__map-layout">

        <div class="territories__map-wrap">
          <?php get_template_part( 'templates/territories-map' ); ?>
        </div>

        <!-- Legend Panel -->
        <div class="territories__legend">

          <!-- Hot Markets -->
          <div class="territories__legend-tier territories__legend-tier--hot">
            <div class="territories__legend-header">
              <span class="territories__legend-icon territories__legend-icon--hot" aria-hidden="true">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 23c-3.6 0-7-2.4-7-7 0-3.3 2.1-5.5 3.8-7.4C10.5 6.7 12 5 12 2c0 0 7 4 7 14 0 4.6-3.4 7-7 7z"/></svg>
              </span>
              <h3 class="territories__legend-title">Hot Markets</h3>
            </div>
            <p class="territories__legend-desc">Priority markets where we are actively seeking qualified franchise partners.</p>
            <ul class="territories__legend-states">
              <li><span class="territories__legend-dot territories__legend-dot--hot"></span>AR &nbsp;Arkansas</li>
              <li><span class="territories__legend-dot territories__legend-dot--hot"></span>FL &nbsp;Florida</li>
              <li><span class="territories__legend-dot territories__legend-dot--hot"></span>IN &nbsp;Indiana</li>
              <li><span class="territories__legend-dot territories__legend-dot--hot"></span>KY &nbsp;Kentucky</li>
              <li><span class="territories__legend-dot territories__legend-dot--hot"></span>LA &nbsp;Louisiana</li>
              <li><span class="territories__legend-dot territories__legend-dot--hot"></span>MS &nbsp;Mississippi</li>
              <li><span class="territories__legend-dot territories__legend-dot--hot"></span>OH &nbsp;Ohio</li>
              <li><span class="territories__legend-dot territories__legend-dot--hot"></span>OK &nbsp;Oklahoma</li>
              <li><span class="territories__legend-dot territories__legend-dot--hot"></span>SC &nbsp;South Carolina</li>
              <li><span class="territories__legend-dot territories__legend-dot--hot"></span>TX &nbsp;Texas</li>
              <li><span class="territories__legend-dot territories__legend-dot--hot"></span>VA &nbsp;Virginia</li>
            </ul>
          </div>

          <!-- Current Development -->
          <div class="territories__legend-tier territories__legend-tier--current">
            <div class="territories__legend-header">
              <span class="territories__legend-icon territories__legend-icon--current" aria-hidden="true">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
              </span>
              <h3 class="territories__legend-title">Current Development Markets</h3>
            </div>
            <p class="territories__legend-desc">Markets currently targeted for Flying Biscuit franchise development.</p>
          </div>

          <!-- Future Development -->
          <div class="territories__legend-tier territories__legend-tier--future">
            <div class="territories__legend-header">
              <span class="territories__legend-icon territories__legend-icon--future" aria-hidden="true">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="12" width="4" height="9" rx="1"/><rect x="10" y="8" width="4" height="13" rx="1"/><rect x="17" y="4" width="4" height="17" rx="1"/></svg>
              </span>
              <h3 class="territories__legend-title">Future Development Markets</h3>
            </div>
            <p class="territories__legend-desc">Markets outside our current development focus that may be considered as our footprint continues to grow.</p>
          </div>

        </div>

      </div>

      <!-- "Don't see your market" callout -->
      <div class="territories__callout">
        <div class="territories__callout-inner">
          <div class="territories__callout-icon" aria-hidden="true">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          </div>
          <div class="territories__callout-body">
            <h3 class="territories__callout-title">Don't See Your Market?</h3>
            <p class="territories__callout-text">Our growth is strategic and intentional. While our focus is on the markets shown, we continually evaluate opportunities as the right partnerships arise.</p>
            <a href="/contact/" class="territories__callout-link">Contact our franchise development team to learn more →</a>
          </div>
        </div>
      </div>

      <!-- Mobile: state list grouped by tier -->
      <div class="territories__mobile-list">

        <h3 class="territories__mobile-tier-title territories__mobile-tier-title--hot">Hot Markets</h3>
        <ul class="territories__state-list">
          <li class="territories__state-item territories__state-item--hot" data-state-name="Arkansas">Arkansas<span class="territories__state-badge territories__state-badge--hot"></span></li>
          <li class="territories__state-item territories__state-item--hot" data-state-name="Florida">Florida<span class="territories__state-badge territories__state-badge--hot"></span></li>
          <li class="territories__state-item territories__state-item--hot" data-state-name="Indiana">Indiana<span class="territories__state-badge territories__state-badge--hot"></span></li>
          <li class="territories__state-item territories__state-item--hot" data-state-name="Kentucky">Kentucky<span class="territories__state-badge territories__state-badge--hot"></span></li>
          <li class="territories__state-item territories__state-item--hot" data-state-name="Louisiana">Louisiana<span class="territories__state-badge territories__state-badge--hot"></span></li>
          <li class="territories__state-item territories__state-item--hot" data-state-name="Mississippi">Mississippi<span class="territories__state-badge territories__state-badge--hot"></span></li>
          <li class="territories__state-item territories__state-item--hot" data-state-name="Ohio">Ohio<span class="territories__state-badge territories__state-badge--hot"></span></li>
          <li class="territories__state-item territories__state-item--hot" data-state-name="Oklahoma">Oklahoma<span class="territories__state-badge territories__state-badge--hot"></span></li>
          <li class="territories__state-item territories__state-item--hot" data-state-name="South Carolina">South Carolina<span class="territories__state-badge territories__state-badge--hot"></span></li>
          <li class="territories__state-item territories__state-item--hot" data-state-name="Texas">Texas<span class="territories__state-badge territories__state-badge--hot"></span></li>
          <li class="territories__state-item territories__state-item--hot" data-state-name="Virginia">Virginia<span class="territories__state-badge territories__state-badge--hot"></span></li>
        </ul>

        <h3 class="territories__mobile-tier-title territories__mobile-tier-title--current">Current Development</h3>
        <ul class="territories__state-list">
          <li class="territories__state-item" data-state-name="Alabama">Alabama<span class="territories__state-badge territories__state-badge--current"></span></li>
          <li class="territories__state-item" data-state-name="Delaware">Delaware<span class="territories__state-badge territories__state-badge--current"></span></li>
          <li class="territories__state-item" data-state-name="Georgia">Georgia<span class="territories__state-badge territories__state-badge--current"></span></li>
          <li class="territories__state-item" data-state-name="Illinois">Illinois<span class="territories__state-badge territories__state-badge--current"></span></li>
          <li class="territories__state-item" data-state-name="Iowa">Iowa<span class="territories__state-badge territories__state-badge--current"></span></li>
          <li class="territories__state-item" data-state-name="Kansas">Kansas<span class="territories__state-badge territories__state-badge--current"></span></li>
          <li class="territories__state-item" data-state-name="Maryland">Maryland<span class="territories__state-badge territories__state-badge--current"></span></li>
          <li class="territories__state-item" data-state-name="Missouri">Missouri<span class="territories__state-badge territories__state-badge--current"></span></li>
          <li class="territories__state-item" data-state-name="North Carolina">North Carolina<span class="territories__state-badge territories__state-badge--current"></span></li>
          <li class="territories__state-item" data-state-name="Pennsylvania">Pennsylvania<span class="territories__state-badge territories__state-badge--current"></span></li>
          <li class="territories__state-item" data-state-name="Tennessee">Tennessee<span class="territories__state-badge territories__state-badge--current"></span></li>
          <li class="territories__state-item" data-state-name="West Virginia">West Virginia<span class="territories__state-badge territories__state-badge--current"></span></li>
        </ul>

        <h3 class="territories__mobile-tier-title territories__mobile-tier-title--future">Future Development</h3>
        <ul class="territories__state-list">
          <li class="territories__state-item" data-state-name="Alaska">Alaska<span class="territories__state-badge territories__state-badge--future"></span></li>
          <li class="territories__state-item" data-state-name="Arizona">Arizona<span class="territories__state-badge territories__state-badge--future"></span></li>
          <li class="territories__state-item" data-state-name="California">California<span class="territories__state-badge territories__state-badge--future"></span></li>
          <li class="territories__state-item" data-state-name="Colorado">Colorado<span class="territories__state-badge territories__state-badge--future"></span></li>
          <li class="territories__state-item" data-state-name="Connecticut">Connecticut<span class="territories__state-badge territories__state-badge--future"></span></li>
          <li class="territories__state-item" data-state-name="Hawaii">Hawaii<span class="territories__state-badge territories__state-badge--future"></span></li>
          <li class="territories__state-item" data-state-name="Idaho">Idaho<span class="territories__state-badge territories__state-badge--future"></span></li>
          <li class="territories__state-item" data-state-name="Maine">Maine<span class="territories__state-badge territories__state-badge--future"></span></li>
          <li class="territories__state-item" data-state-name="Massachusetts">Massachusetts<span class="territories__state-badge territories__state-badge--future"></span></li>
          <li class="territories__state-item" data-state-name="Michigan">Michigan<span class="territories__state-badge territories__state-badge--future"></span></li>
          <li class="territories__state-item" data-state-name="Minnesota">Minnesota<span class="territories__state-badge territories__state-badge--future"></span></li>
          <li class="territories__state-item" data-state-name="Montana">Montana<span class="territories__state-badge territories__state-badge--future"></span></li>
          <li class="territories__state-item" data-state-name="Nebraska">Nebraska<span class="territories__state-badge territories__state-badge--future"></span></li>
          <li class="territories__state-item" data-state-name="Nevada">Nevada<span class="territories__state-badge territories__state-badge--future"></span></li>
          <li class="territories__state-item" data-state-name="New Hampshire">New Hampshire<span class="territories__state-badge territories__state-badge--future"></span></li>
          <li class="territories__state-item" data-state-name="New Jersey">New Jersey<span class="territories__state-badge territories__state-badge--future"></span></li>
          <li class="territories__state-item" data-state-name="New Mexico">New Mexico<span class="territories__state-badge territories__state-badge--future"></span></li>
          <li class="territories__state-item" data-state-name="New York">New York<span class="territories__state-badge territories__state-badge--future"></span></li>
          <li class="territories__state-item" data-state-name="North Dakota">North Dakota<span class="territories__state-badge territories__state-badge--future"></span></li>
          <li class="territories__state-item" data-state-name="Oregon">Oregon<span class="territories__state-badge territories__state-badge--future"></span></li>
          <li class="territories__state-item" data-state-name="Rhode Island">Rhode Island<span class="territories__state-badge territories__state-badge--future"></span></li>
          <li class="territories__state-item" data-state-name="South Dakota">South Dakota<span class="territories__state-badge territories__state-badge--future"></span></li>
          <li class="territories__state-item" data-state-name="Utah">Utah<span class="territories__state-badge territories__state-badge--future"></span></li>
          <li class="territories__state-item" data-state-name="Vermont">Vermont<span class="territories__state-badge territories__state-badge--future"></span></li>
          <li class="territories__state-item" data-state-name="Washington">Washington<span class="territories__state-badge territories__state-badge--future"></span></li>
          <li class="territories__state-item" data-state-name="Wisconsin">Wisconsin<span class="territories__state-badge territories__state-badge--future"></span></li>
          <li class="territories__state-item" data-state-name="Wyoming">Wyoming<span class="territories__state-badge territories__state-badge--future"></span></li>
        </ul>

      </div>

      <!-- Footnote -->
      <p class="territories__footnote">Map reflects U.S. territories. Availability of specific territories within states may be limited.</p>

    </div>
  </section>

  <!-- ─── CUSTOM MODAL ─── -->
  <div class="territories__modal" id="territoriesModal" role="dialog" aria-modal="true" aria-labelledby="territoriesModalTitle" hidden>
    <div class="territories__modal-backdrop" data-close-modal></div>
    <div class="territories__modal-dialog">
      <button class="territories__modal-close" type="button" data-close-modal aria-label="Close">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
      </button>
      <div class="territories__modal-body">
        <div class="territories__modal-icon" aria-hidden="true">
          <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
        </div>
        <h3 class="territories__modal-title" id="territoriesModalTitle"></h3>
        <p class="territories__modal-desc"></p>
        <a href="/contact/" class="territories__modal-cta" id="territoriesModalCta">
          Start the Conversation
          <span aria-hidden="true">→</span>
        </a>
      </div>
    </div>
  </div>

  <!-- ─── CTA ─── -->
  <section class="territories__closing">
    <div class="territories__closing-inner">
      <h2 class="territories__closing-title">Ready to Claim <span class="territories__accent">Your Market?</span></h2>
      <p class="territories__closing-desc">The best territories won't last. Connect with our franchise development team to explore what's available in your area.</p>
      <div class="territories__closing-actions">
        <a href="/contact/" class="territories__closing-btn territories__closing-btn--primary">
          Start the Conversation
          <span aria-hidden="true">→</span>
        </a>
        <a href="/steps-to-ownership/" class="territories__closing-btn territories__closing-btn--secondary">
          View Steps to Ownership
        </a>
      </div>
    </div>
  </section>

</div>

<?php get_footer(); ?>
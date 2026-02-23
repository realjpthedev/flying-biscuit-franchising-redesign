<?php
/**
 * Template Name: Available Territories
 * The Flying Biscuit Café — Franchising
 * v1.0
 */

// Prevent direct file access
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}


get_header();
?>

  <!-- ─── HERO ─── -->
  <section class="territories__hero">
    <div class="territories__hero-inner">
      <p class="territories__eyebrow">Available Territories</p>
      <h1 class="territories__hero-title">Find Your <span class="territories__accent">Territory</span></h1>
      <p class="territories__hero-desc">We're growing across the country — and looking for passionate franchise partners to bring the Flying Biscuit experience to new communities.</p>
    </div>
  </section>

  <!-- ─── MAP SECTION ─── -->
  <section class="territories__map-section">
    <div class="territories__map-inner">

      <!-- Legend -->
      <ul class="territories__key">
        <li class="territories__key-item">
          <span class="territories__key-swatch territories__key-swatch--hot"></span>
          <span class="territories__key-label">Hot Markets</span>
        </li>
        <li class="territories__key-item">
          <span class="territories__key-swatch territories__key-swatch--available"></span>
          <span class="territories__key-label">Available</span>
        </li>
        <li class="territories__key-item">
          <span class="territories__key-swatch territories__key-swatch--limited"></span>
          <span class="territories__key-label">Limited</span>
        </li>
      </ul>

      <!-- Desktop: sidebar + map -->
      <div class="territories__map-layout">

        <div class="territories__sidebar">
          <div class="territories__sidebar-card">
            <h3 class="territories__sidebar-title">Hot Markets</h3>
            <p class="territories__sidebar-subtitle">With Rapid Growth!</p>
            <ul class="territories__sidebar-list">
              <li>North Carolina</li>
              <li>South Carolina</li>
              <li>Florida</li>
              <li>Alabama</li>
              <li>Tennessee</li>
              <li>Texas</li>
            </ul>
            <a href="/contact/" class="territories__sidebar-cta">
              Get Started
              <span aria-hidden="true">→</span>
            </a>
          </div>
        </div>

        <div class="territories__map-wrap">
          <?php
          /**
           * SVG Map — Copy the <svg id="availableTerritoriesMap">…</svg>
           * from your existing page into templates/territories-map.php,
           * then include it here. Add class="territories__svg" to the
           * <svg> tag. The SVG markup stays the same — the SCSS reskins
           * it using .state, .hot-territory, .limited-territory.
           *
           * Alternatively, paste the SVG inline right here.
           */
          get_template_part( 'templates/territories-map' );
          ?>
        </div>

      </div>

      <!-- Mobile: state list -->
      <ul class="territories__state-list">

        <li class="territories__state-item territories__state-item--hot" data-state-name="Alabama">
          Alabama
          <span class="territories__state-badge territories__state-badge--hot"></span>
        </li>
        <li class="territories__state-item" data-state-name="Alaska">
          Alaska
          <span class="territories__state-badge territories__state-badge--available"></span>
        </li>
        <li class="territories__state-item" data-state-name="Arizona">
          Arizona
          <span class="territories__state-badge territories__state-badge--available"></span>
        </li>
        <li class="territories__state-item" data-state-name="Arkansas">
          Arkansas
          <span class="territories__state-badge territories__state-badge--available"></span>
        </li>
        <li class="territories__state-item" data-state-name="California">
          California
          <span class="territories__state-badge territories__state-badge--available"></span>
        </li>
        <li class="territories__state-item" data-state-name="Colorado">
          Colorado
          <span class="territories__state-badge territories__state-badge--available"></span>
        </li>
        <li class="territories__state-item" data-state-name="Connecticut">
          Connecticut
          <span class="territories__state-badge territories__state-badge--available"></span>
        </li>
        <li class="territories__state-item" data-state-name="Delaware">
          Delaware
          <span class="territories__state-badge territories__state-badge--available"></span>
        </li>
        <li class="territories__state-item territories__state-item--hot" data-state-name="Florida">
          Florida
          <span class="territories__state-badge territories__state-badge--hot"></span>
        </li>
        <li class="territories__state-item territories__state-item--limited" data-state-name="Georgia">
          Georgia
          <span class="territories__state-badge territories__state-badge--limited"></span>
        </li>
        <li class="territories__state-item" data-state-name="Hawaii">
          Hawaii
          <span class="territories__state-badge territories__state-badge--available"></span>
        </li>
        <li class="territories__state-item" data-state-name="Idaho">
          Idaho
          <span class="territories__state-badge territories__state-badge--available"></span>
        </li>
        <li class="territories__state-item" data-state-name="Illinois">
          Illinois
          <span class="territories__state-badge territories__state-badge--available"></span>
        </li>
        <li class="territories__state-item" data-state-name="Indiana">
          Indiana
          <span class="territories__state-badge territories__state-badge--available"></span>
        </li>
        <li class="territories__state-item" data-state-name="Iowa">
          Iowa
          <span class="territories__state-badge territories__state-badge--available"></span>
        </li>
        <li class="territories__state-item" data-state-name="Kansas">
          Kansas
          <span class="territories__state-badge territories__state-badge--available"></span>
        </li>
        <li class="territories__state-item" data-state-name="Kentucky">
          Kentucky
          <span class="territories__state-badge territories__state-badge--available"></span>
        </li>
        <li class="territories__state-item" data-state-name="Louisiana">
          Louisiana
          <span class="territories__state-badge territories__state-badge--available"></span>
        </li>
        <li class="territories__state-item" data-state-name="Maine">
          Maine
          <span class="territories__state-badge territories__state-badge--available"></span>
        </li>
        <li class="territories__state-item" data-state-name="Maryland">
          Maryland
          <span class="territories__state-badge territories__state-badge--available"></span>
        </li>
        <li class="territories__state-item" data-state-name="Massachusetts">
          Massachusetts
          <span class="territories__state-badge territories__state-badge--available"></span>
        </li>
        <li class="territories__state-item" data-state-name="Michigan">
          Michigan
          <span class="territories__state-badge territories__state-badge--available"></span>
        </li>
        <li class="territories__state-item" data-state-name="Minnesota">
          Minnesota
          <span class="territories__state-badge territories__state-badge--available"></span>
        </li>
        <li class="territories__state-item" data-state-name="Mississippi">
          Mississippi
          <span class="territories__state-badge territories__state-badge--available"></span>
        </li>
        <li class="territories__state-item" data-state-name="Missouri">
          Missouri
          <span class="territories__state-badge territories__state-badge--available"></span>
        </li>
        <li class="territories__state-item" data-state-name="Montana">
          Montana
          <span class="territories__state-badge territories__state-badge--available"></span>
        </li>
        <li class="territories__state-item" data-state-name="Nebraska">
          Nebraska
          <span class="territories__state-badge territories__state-badge--available"></span>
        </li>
        <li class="territories__state-item" data-state-name="Nevada">
          Nevada
          <span class="territories__state-badge territories__state-badge--available"></span>
        </li>
        <li class="territories__state-item" data-state-name="New Hampshire">
          New Hampshire
          <span class="territories__state-badge territories__state-badge--available"></span>
        </li>
        <li class="territories__state-item" data-state-name="New Jersey">
          New Jersey
          <span class="territories__state-badge territories__state-badge--available"></span>
        </li>
        <li class="territories__state-item" data-state-name="New Mexico">
          New Mexico
          <span class="territories__state-badge territories__state-badge--available"></span>
        </li>
        <li class="territories__state-item" data-state-name="New York">
          New York
          <span class="territories__state-badge territories__state-badge--available"></span>
        </li>
        <li class="territories__state-item territories__state-item--hot" data-state-name="North Carolina">
          North Carolina
          <span class="territories__state-badge territories__state-badge--hot"></span>
        </li>
        <li class="territories__state-item" data-state-name="North Dakota">
          North Dakota
          <span class="territories__state-badge territories__state-badge--available"></span>
        </li>
        <li class="territories__state-item" data-state-name="Ohio">
          Ohio
          <span class="territories__state-badge territories__state-badge--available"></span>
        </li>
        <li class="territories__state-item" data-state-name="Oklahoma">
          Oklahoma
          <span class="territories__state-badge territories__state-badge--available"></span>
        </li>
        <li class="territories__state-item" data-state-name="Oregon">
          Oregon
          <span class="territories__state-badge territories__state-badge--available"></span>
        </li>
        <li class="territories__state-item" data-state-name="Pennsylvania">
          Pennsylvania
          <span class="territories__state-badge territories__state-badge--available"></span>
        </li>
        <li class="territories__state-item" data-state-name="Rhode Island">
          Rhode Island
          <span class="territories__state-badge territories__state-badge--available"></span>
        </li>
        <li class="territories__state-item territories__state-item--hot" data-state-name="South Carolina">
          South Carolina
          <span class="territories__state-badge territories__state-badge--hot"></span>
        </li>
        <li class="territories__state-item" data-state-name="South Dakota">
          South Dakota
          <span class="territories__state-badge territories__state-badge--available"></span>
        </li>
        <li class="territories__state-item territories__state-item--hot" data-state-name="Tennessee">
          Tennessee
          <span class="territories__state-badge territories__state-badge--hot"></span>
        </li>
        <li class="territories__state-item territories__state-item--hot" data-state-name="Texas">
          Texas
          <span class="territories__state-badge territories__state-badge--hot"></span>
        </li>
        <li class="territories__state-item" data-state-name="Utah">
          Utah
          <span class="territories__state-badge territories__state-badge--available"></span>
        </li>
        <li class="territories__state-item" data-state-name="Vermont">
          Vermont
          <span class="territories__state-badge territories__state-badge--available"></span>
        </li>
        <li class="territories__state-item" data-state-name="Virginia">
          Virginia
          <span class="territories__state-badge territories__state-badge--available"></span>
        </li>
        <li class="territories__state-item" data-state-name="Washington">
          Washington
          <span class="territories__state-badge territories__state-badge--available"></span>
        </li>
        <li class="territories__state-item" data-state-name="West Virginia">
          West Virginia
          <span class="territories__state-badge territories__state-badge--available"></span>
        </li>
        <li class="territories__state-item" data-state-name="Wisconsin">
          Wisconsin
          <span class="territories__state-badge territories__state-badge--available"></span>
        </li>
        <li class="territories__state-item" data-state-name="Wyoming">
          Wyoming
          <span class="territories__state-badge territories__state-badge--available"></span>
        </li>

      </ul>

    </div>
  </section>

  <!-- ─── CUSTOM MODAL (replaces Bootstrap) ─── -->
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
          Take My First Step
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

<?php get_footer(); ?>
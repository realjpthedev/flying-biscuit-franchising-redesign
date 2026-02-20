<?php
/**
 * Template Name: Our Menu
 * The Flying Biscuit Café — Franchising
 * v1.0
 */

get_header();
?>

<main class="our-menu" id="main-content">

  <!-- ─── HERO ─── -->
  <section class="our-menu__hero">
    <div class="our-menu__hero-inner">
      <p class="our-menu__eyebrow">The Menu</p>
      <h1 class="our-menu__hero-title">A Menu Worth <span class="our-menu__accent">Lining Up For</span></h1>
      <p class="our-menu__hero-desc">Southern scratch-made classics, bold flavors, and over 100,000 positive reviews. This is the food that turns first-time visitors into lifelong fans.</p>
      <a href="<?php echo get_theme_file_uri( '/assets/img/pdf/athens-menu.pdf' ); ?>" class="our-menu__hero-cta" target="_blank" rel="noopener">
        View Full Menu
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
      </a>
    </div>
  </section>

  <!-- ─── MENU CATEGORIES ─── -->
  <section class="our-menu__categories">
    <div class="our-menu__categories-inner">

      <div class="our-menu__categories-header">
        <p class="our-menu__eyebrow our-menu__eyebrow--dark">What We Serve</p>
        <h2 class="our-menu__section-title">Breakfast, Brunch &amp; Lunch — All Day</h2>
        <p class="our-menu__section-desc">Our focused menu keeps operations simple and guests happy. Every item is crafted for flavor, margin, and ease of execution.</p>
      </div>

      <div class="our-menu__category-grid">

        <div class="our-menu__category">
          <div class="our-menu__category-image-wrap">
            <img
              src="<?php echo get_theme_file_uri( '/assets/img/food/flying-biscuit-breakfast.jpg' ); ?>"
              alt="Breakfast favorites at Flying Biscuit Café"
              class="our-menu__category-image"
              loading="lazy"
            />
          </div>
          <div class="our-menu__category-body">
            <h3 class="our-menu__category-title">Breakfast Classics</h3>
            <p class="our-menu__category-desc">Signature biscuits, organic oatmeal, farm-fresh eggs, and scratch-made specialties served all day long.</p>
            <ul class="our-menu__category-items">
              <li>Famous Flying Biscuits</li>
              <li>Flying Biscuit Breakfast</li>
              <li>Stuffed French Toast</li>
              <li>Hangover Hash</li>
            </ul>
          </div>
        </div>

        <div class="our-menu__category">
          <div class="our-menu__category-image-wrap">
            <img
              src="<?php echo get_theme_file_uri( '/assets/img/food/fb-nashville-hot-chicken-wrap.jpg' ); ?>"
              alt="Lunch offerings at Flying Biscuit Café"
              class="our-menu__category-image"
              loading="lazy"
            />
          </div>
          <div class="our-menu__category-body">
            <h3 class="our-menu__category-title">Lunch &amp; Midday</h3>
            <p class="our-menu__category-desc">Hearty sandwiches, fresh salads, and Southern comfort plates that keep the lunch crowd coming back.</p>
            <ul class="our-menu__category-items">
              <li>Nashville Hot Chicken Wrap</li>
              <li>Wake Up Burger</li>
              <li>Big Chop Caesar Salad</li>
            </ul>
          </div>
        </div>

        <div class="our-menu__category">
          <div class="our-menu__category-image-wrap">
            <img
              src="<?php echo get_theme_file_uri( '/assets/img/food/shrimp-n-grits-our-menu.jpg' ); ?>"
              alt="Signature dishes at Flying Biscuit Café"
              class="our-menu__category-image"
              loading="lazy"
            />
          </div>
          <div class="our-menu__category-body">
            <h3 class="our-menu__category-title">Signature Plates</h3>
            <p class="our-menu__category-desc">The dishes that made us famous — from our legendary award winning shrimp &amp; grits to our famous Stuffed French Toast.</p>
            <ul class="our-menu__category-items">
              <li>Shrimp &amp; Grits</li>
              <li>Chicken & Waffles</li>
              <li>Stuffed French Toast</li>
              <li>Smoked Salmon Scramble</li>
            </ul>
          </div>
        </div>

        <div class="our-menu__category">
          <div class="our-menu__category-image-wrap">
            <img
              src="<?php echo get_theme_file_uri( '/assets/img/food/stage-5-clinger-square.jpg' ); ?>"
              alt="Beverages at Flying Biscuit Café"
              class="our-menu__category-image"
              loading="lazy"
            />
          </div>
          <div class="our-menu__category-body">
            <h3 class="our-menu__category-title">Drinks &amp; Cocktails</h3>
            <p class="our-menu__category-desc">Fresh-squeezed juices, craft coffee, mimosa towers, and Bloody Marys that drive check averages.</p>
            <ul class="our-menu__category-items">
              <li>Mimosa Towers</li>
              <li>Bloody Marys</li>
              <li>Fresh-Squeezed Juices</li>
              <li>Specialty Coffee</li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ─── SIGNATURE SPOTLIGHT ─── -->
  <section class="our-menu__spotlight">
    <div class="our-menu__spotlight-inner">

      <div class="our-menu__spotlight-content">
        <p class="our-menu__eyebrow">The Icons</p>
        <h2 class="our-menu__section-title">The Dishes That Built a Following</h2>
        <p class="our-menu__spotlight-desc">Some items transcend the menu. These are the dishes people drive across town for — the ones that turn a café into a destination.</p>
      </div>

      <div class="our-menu__spotlight-grid">

        <div class="our-menu__spotlight-card our-menu__spotlight-card--feature">
          <div class="our-menu__spotlight-image-wrap">
            <img
              src="<?php echo get_theme_file_uri( '/assets/img/food/biscuits.jpg' ); ?>"
              alt="The Famous Flying Biscuit with cranberry apple butter"
              class="our-menu__spotlight-image"
              loading="lazy"
            />
          </div>
          <div class="our-menu__spotlight-body">
            <span class="our-menu__spotlight-label">Est. 1993</span>
            <h3 class="our-menu__spotlight-title">The Famous Flying Biscuit</h3>
            <p class="our-menu__spotlight-desc-text">The one that started it all. Our oversized, golden, flaky biscuit served with house-made cranberry apple butter. It's been flying out the door for 30+ years — and it's the reason we got our name.</p>
          </div>
        </div>

        <div class="our-menu__spotlight-card">
          <div class="our-menu__spotlight-image-wrap">
            <img
              src="<?php echo get_theme_file_uri( '/assets/img/food/shrimp-n-grits-our-menu.jpg' ); ?>"
              alt="Shrimp and Grits at Flying Biscuit Café"
              class="our-menu__spotlight-image"
              loading="lazy"
            />
          </div>
          <div class="our-menu__spotlight-body">
            <h3 class="our-menu__spotlight-title">Shrimp &amp; Grits</h3>
            <p class="our-menu__spotlight-desc-text">Famous creamy dreamy white cheddar cheese grits topped w/ blackened shrimp and spicy marinara sauce garnished with fresh basil served with a flying biscuit.</p>
          </div>
        </div>

        <div class="our-menu__spotlight-card">
          <div class="our-menu__spotlight-image-wrap">
            <img
              src="<?php echo get_theme_file_uri( '/assets/img/food/stuffed-french-toast-square.jpg' ); ?>"
              alt="Stuffed French Toast at Flying Biscuit Café"
              class="our-menu__spotlight-image"
              loading="lazy"
            />
          </div>
          <div class="our-menu__spotlight-body">
            <h3 class="our-menu__spotlight-title">Stuffed French Toast</h3>
            <p class="our-menu__spotlight-desc-text">Two thick slices of French toast stuffed with sweet cream cheese and topped with raspberry sauce, crème anglaise, fresh strawberries, and powdered sugar. Served with two eggs and chicken sage sausage patties.</p>
          </div>
        </div>

        <div class="our-menu__spotlight-card">
          <div class="our-menu__spotlight-image-wrap">
            <img
              src="<?php echo get_theme_file_uri( '/assets/img/food/mimosa-tower.jpg' ); ?>"
              alt="Mimosa flight at Flying Biscuit Café"
              class="our-menu__spotlight-image"
              loading="lazy"
            />
          </div>
          <div class="our-menu__spotlight-body">
            <h3 class="our-menu__spotlight-title">Mimosa Towers</h3>
            <p class="our-menu__spotlight-desc-text">The shareable showpiece that turns brunch into an event. A proven check-average booster that guests can't stop posting about.</p>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- ─── PHOTO GALLERY / LIGHTBOX ─── -->
  <section class="our-menu__gallery">
    <div class="our-menu__gallery-inner">

      <div class="our-menu__gallery-header">
        <p class="our-menu__eyebrow our-menu__eyebrow--dark">Gallery</p>
        <h2 class="our-menu__section-title">Feast With Your Eyes</h2>
      </div>

      <div class="our-menu__gallery-grid" id="menuGallery">

        <a href="<?php echo get_theme_file_uri( '/assets/img/food/biscuits.jpg' ); ?>" class="our-menu__gallery-item" data-caption="The Famous Flying Biscuit">
          <img src="<?php echo get_theme_file_uri( '/assets/img/food/biscuits.jpg' ); ?>" alt="The Famous Flying Biscuit" loading="lazy" />
          <span class="our-menu__gallery-zoom" aria-hidden="true">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg>
          </span>
        </a>

        <a href="<?php echo get_theme_file_uri( '/assets/img/food/shrimp-n-grits-our-menu.jpg' ); ?>" class="our-menu__gallery-item" data-caption="Shrimp &amp; Grits">
          <img src="<?php echo get_theme_file_uri( '/assets/img/food/shrimp-n-grits-our-menu.jpg' ); ?>" alt="Shrimp &amp; Grits" loading="lazy" />
          <span class="our-menu__gallery-zoom" aria-hidden="true">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg>
          </span>
        </a>

        <a href="<?php echo get_theme_file_uri( '/assets/img/food/stuffed-french-toast-square.jpg' ); ?>" class="our-menu__gallery-item" data-caption="Stuffed French Toast">
          <img src="<?php echo get_theme_file_uri( '/assets/img/food/stuffed-french-toast-square.jpg' ); ?>" alt="Stuffed French Toast" loading="lazy" />
          <span class="our-menu__gallery-zoom" aria-hidden="true">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg>
          </span>
        </a>

        <a href="<?php echo get_theme_file_uri( '/assets/img/food/flying-biscuit-breakfast.jpg' ); ?>" class="our-menu__gallery-item" data-caption="Flying Biscuit Breakfast">
          <img src="<?php echo get_theme_file_uri( '/assets/img/food/flying-biscuit-breakfast.jpg' ); ?>" alt="Flying Biscuit Breakfast" loading="lazy" />
          <span class="our-menu__gallery-zoom" aria-hidden="true">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg>
          </span>
        </a>

        <a href="<?php echo get_theme_file_uri( '/assets/img/food/mimosa-tower.jpg' ); ?>" class="our-menu__gallery-item" data-caption="Mimosa Towers">
          <img src="<?php echo get_theme_file_uri( '/assets/img/food/mimosa-tower.jpg' ); ?>" alt="Mimosa Towers" loading="lazy" />
          <span class="our-menu__gallery-zoom" aria-hidden="true">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg>
          </span>
        </a>

        <a href="<?php echo get_theme_file_uri( '/assets/img/food/fb-dirty-bird.jpg' ); ?>" class="our-menu__gallery-item" data-caption="Dirty Bird">
          <img src="<?php echo get_theme_file_uri( '/assets/img/food/fb-dirty-bird.jpg' ); ?>" alt="Dirty Bird" loading="lazy" />
          <span class="our-menu__gallery-zoom" aria-hidden="true">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg>
          </span>
        </a>

        <a href="<?php echo get_theme_file_uri( '/assets/img/food/grits.jpg' ); ?>" class="our-menu__gallery-item" data-caption="Creamy Dreamy White Cheddar Cheese Grits">
          <img src="<?php echo get_theme_file_uri( '/assets/img/food/grits.jpg' ); ?>" alt="Creamy Dreamy White Cheddar Cheese Grits" loading="lazy" />
          <span class="our-menu__gallery-zoom" aria-hidden="true">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg>
          </span>
        </a>

        <a href="<?php echo get_theme_file_uri( '/assets/img/food/fb-donuts-large.jpg' ); ?>" class="our-menu__gallery-item" data-caption="Beignet Doughnuts with Creme Anglaise">
          <img src="<?php echo get_theme_file_uri( '/assets/img/food/fb-donuts-small.jpg' ); ?>" alt="Beignet Doughnuts with Creme Anglaise" loading="lazy" />
          <span class="our-menu__gallery-zoom" aria-hidden="true">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg>
          </span>
        </a>

      </div>

    </div>
  </section>

  <!-- ─── LIGHTBOX ─── -->
  <div class="our-menu__lightbox" id="menuLightbox" role="dialog" aria-modal="true" aria-label="Menu photo gallery" hidden>
    <button class="our-menu__lightbox-close" id="lightboxClose" type="button" aria-label="Close gallery">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
    </button>

    <button class="our-menu__lightbox-arrow our-menu__lightbox-arrow--prev" id="lightboxPrev" type="button" aria-label="Previous photo">
      <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"/></svg>
    </button>
    <button class="our-menu__lightbox-arrow our-menu__lightbox-arrow--next" id="lightboxNext" type="button" aria-label="Next photo">
      <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 6 15 12 9 18"/></svg>
    </button>

    <div class="our-menu__lightbox-stage">
      <img class="our-menu__lightbox-image" id="lightboxImage" src="" alt="" />
      <p class="our-menu__lightbox-caption" id="lightboxCaption"></p>
    </div>

    <div class="our-menu__lightbox-counter" id="lightboxCounter"></div>
  </div>

  <!-- ─── VIDEO REELS ─── -->
  <section class="our-menu__reels">
    <div class="our-menu__reels-inner">

      <div class="our-menu__reels-header">
        <p class="our-menu__eyebrow">Watch</p>
        <h2 class="our-menu__section-title">See It Sizzle</h2>
      </div>

      <div class="our-menu__reels-grid">

        <div class="our-menu__reel" data-youtube-id="k3YD-mX62Os">
          <img
            src="<?php echo get_theme_file_uri( '/assets/img/thumbnails/beignet-doughnuts-thumbnail.jpg' ); ?>"
            alt="Flying Biscuit Café food reel"
            class="our-menu__reel-poster"
            loading="lazy"
          />
          <div class="our-menu__reel-embed"></div>
          <button class="our-menu__reel-play" type="button" aria-label="Play video">
            <span class="our-menu__reel-play-icon" aria-hidden="true">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><polygon points="6 3 20 12 6 21 6 3"/></svg>
            </span>
          </button>
        </div>

        <div class="our-menu__reel" data-youtube-id="JD2KWZShMzg">
          <img
            src="<?php echo get_theme_file_uri( '/assets/img/thumbnails/chicken-waffles-3-ways-thumbnail.jpg' ); ?>"
            alt="Flying Biscuit Café food reel"
            class="our-menu__reel-poster"
            loading="lazy"
          />
          <div class="our-menu__reel-embed"></div>
          <button class="our-menu__reel-play" type="button" aria-label="Play video">
            <span class="our-menu__reel-play-icon" aria-hidden="true">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><polygon points="6 3 20 12 6 21 6 3"/></svg>
            </span>
          </button>
        </div>

        <div class="our-menu__reel" data-youtube-id="qAATQV9jBWY">
          <img
            src="<?php echo get_theme_file_uri( '/assets/img/thumbnails/stuffed-french-toast-thumbnail.jpg' ); ?>"
            alt="Flying Biscuit Café food reel"
            class="our-menu__reel-poster"
            loading="lazy"
          />
          <div class="our-menu__reel-embed"></div>
          <button class="our-menu__reel-play" type="button" aria-label="Play video">
            <span class="our-menu__reel-play-icon" aria-hidden="true">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><polygon points="6 3 20 12 6 21 6 3"/></svg>
            </span>
          </button>
        </div>

      </div>

    </div>
  </section>

  <!-- ─── BUSINESS CASE ─── -->
  <section class="our-menu__business">
    <div class="our-menu__business-inner">

      <div class="our-menu__business-content">
        <p class="our-menu__eyebrow">The Business Case</p>
        <h2 class="our-menu__section-title">A Menu Built for Profitability</h2>
        <p class="our-menu__business-desc">Great food is just the start. Our menu is engineered to drive margins, simplify operations, and keep your team focused.</p>
      </div>

      <div class="our-menu__business-grid">

        <div class="our-menu__business-card">
          <div class="our-menu__business-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
          </div>
          <h3 class="our-menu__business-title">Lower Food Costs</h3>
          <p class="our-menu__business-text">Breakfast and brunch ingredients — eggs, flour, butter, produce — cost a fraction of dinner proteins. Our menu is designed around high-margin, low-waste items.</p>
        </div>

        <div class="our-menu__business-card">
          <div class="our-menu__business-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          </div>
          <h3 class="our-menu__business-title">Simpler Operations</h3>
          <p class="our-menu__business-text">A focused menu means streamlined prep, faster ticket times, and less complexity in the kitchen. Your team can master it quickly and execute it consistently.</p>
        </div>

        <div class="our-menu__business-card">
          <div class="our-menu__business-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 01-8 0"/></svg>
          </div>
          <h3 class="our-menu__business-title">National Buying Power</h3>
          <p class="our-menu__business-text">Our collective purchasing program — one of the best in America — means lower ingredient costs and vendor relationships already negotiated for you.</p>
        </div>

        <div class="our-menu__business-card">
          <div class="our-menu__business-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>
          </div>
          <h3 class="our-menu__business-title">Check-Average Boosters</h3>
          <p class="our-menu__business-text">Mimosa towers, Bloody Marys, and craft coffee aren't just crowd favorites — they're high-margin add-ons that drive revenue per guest.</p>
        </div>

      </div>

    </div>
  </section>

  <!-- ─── CTA ─── -->
  <section class="our-menu__cta">
    <div class="our-menu__cta-inner">
      <h2 class="our-menu__cta-title">Want to See the Full <span class="our-menu__accent">Menu in Action?</span></h2>
      <p class="our-menu__cta-desc">Schedule a Discovery Day and taste the food, meet the team, and see why our menu keeps guests — and franchisees — coming back.</p>
      <div class="our-menu__cta-actions">
        <a href="/contact/" class="our-menu__cta-btn our-menu__cta-btn--primary">
          Get Started
          <span aria-hidden="true">→</span>
        </a>
        <a href="/steps-to-ownership/" class="our-menu__cta-btn our-menu__cta-btn--secondary">
          View Steps to Ownership
        </a>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
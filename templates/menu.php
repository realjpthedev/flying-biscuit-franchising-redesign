<!-- ============================================
     The Flying Biscuit Café — Franchising
     Menu Section (Slider)
     v1.0
     ============================================ -->

<section class="menu-section">
  <div class="menu-section__inner">

    <!-- Header -->
    <div class="menu-section__header">
      <p class="menu-section__eyebrow">The Menu</p>
      <h2 class="menu-section__title">Our Menu: A Recipe For Success</h2>
      <p class="menu-section__subtitle">People Crave Our Menu · Designed For Profit · Battle Tested For Ease of Execution.</p>
    </div>

    <!-- Slider -->
    <div class="menu-section__slider" id="menuSlider">

      <!-- Slides -->
      <div class="menu-section__slides">

        <div class="menu-section__slide is-active" data-slide="0">
          <div class="menu-section__slide-content">
            <h3 class="menu-section__slide-title">
              <a href="/menu">People Crave Our Menu</a>
            </h3>
            <p>For 30 years, we've crafted Southern scratch-made classics and bold menu items—from biscuits and eggs to burgers, Bloody Marys, and mimosas.</p>
            <p>Our one-of-a-kind menu has earned over 100,000 five-star reviews and keeps guests coming back.</p>
          </div>
          <div class="menu-section__slide-image">
            <img src="<?php echo esc_attr(get_theme_file_uri('/assets/img/food/shrimp-n-grits-our-menu.jpg')); ?>" alt="Shrimp and grits served on a red plate" loading="lazy" />
          </div>
        </div>

        <div class="menu-section__slide" data-slide="1">
          <div class="menu-section__slide-content">
            <h3 class="menu-section__slide-title">
              <a href="/menu">A Menu Designed For Profit</a>
            </h3>
            <p>Our menu streamlines prep, minimizes waste, and delivers strong margins with predictable costs. Backed by national vendor agreements and decades of data-driven tweaks, it's a proven recipe for year-round profitability.</p>
          </div>
          <div class="menu-section__slide-image">
            <img src="<?php echo esc_attr(get_theme_file_uri('/assets/img/food/fb-interior-our-menu.jpg')); ?>" alt="Interior shot of flying biscuit" loading="lazy" />
          </div>
        </div>

        <div class="menu-section__slide" data-slide="2">
          <div class="menu-section__slide-content">
            <h3 class="menu-section__slide-title">
              <a href="/menu">Easy to Execute, Amazing Flavors </a>
            </h3>
            <p>
              Blending authentic Southern taste with straightforward, step-by-step recipes, our menu delivers big flavor without kitchen complexity. Standardized prep guides and pre-portioned ingredients mean your team can serve consistent, crave-worthy dishes from day one.
            </p>
          </div>
          <div class="menu-section__slide-image">
            <img src="<?php echo esc_attr(get_theme_file_uri('/assets/img/food/mimosas-our-menu.jpg')); ?>" alt="Mimosas" loading="lazy" />
          </div>
        </div>

      </div>

      <!-- Controls -->
      <div class="menu-section__controls">
        <button
          class="menu-section__nav-btn menu-section__nav-btn--prev"
          id="menuSliderPrev"
          type="button"
          aria-label="Previous slide"
        >
          <span aria-hidden="true">‹</span>
        </button>
        <button
          class="menu-section__nav-btn menu-section__nav-btn--next"
          id="menuSliderNext"
          type="button"
          aria-label="Next slide"
        >
          <span aria-hidden="true">›</span>
        </button>

        <!-- Slide indicators -->
        <div class="menu-section__dots" role="tablist" aria-label="Slide navigation">
          <button class="menu-section__dot is-active" role="tab" aria-selected="true" aria-label="Slide 1" data-goto="0" type="button"></button>
          <button class="menu-section__dot" role="tab" aria-selected="false" aria-label="Slide 2" data-goto="1" type="button"></button>
          <button class="menu-section__dot" role="tab" aria-selected="false" aria-label="Slide 3" data-goto="2" type="button"></button>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- ============================================
     The Flying Biscuit Café — Franchising
     Testimonials Section (Premium)
     v1.0
     ============================================ -->

<section class="testimonials">
  <div class="testimonials__inner">

    <!-- Header -->
    <div class="testimonials__header">
      <p class="testimonials__eyebrow">Franchisee Stories</p>
      <h2 class="testimonials__title">Hear From Our Owners</h2>
    </div>

    <!-- Slider -->
    <div class="testimonials__slider" id="testimonialSlider">

      <!-- Side Arrows -->
      <button
        class="testimonials__arrow testimonials__arrow--prev"
        id="testimonialPrev"
        type="button"
        aria-label="Previous testimonial"
      >
        <span aria-hidden="true">‹</span>
      </button>
      <button
        class="testimonials__arrow testimonials__arrow--next"
        id="testimonialNext"
        type="button"
        aria-label="Next testimonial"
      >
        <span aria-hidden="true">›</span>
      </button>

      <!-- Decorative quote mark -->
      <div class="testimonials__watermark" aria-hidden="true">"</div>

      <!-- Slides -->
      <div class="testimonials__slides">

        <!-- Slide 1: Kevin White -->
        <div class="testimonials__slide is-active" data-slide="0">
          <div class="testimonials__portrait">
            <div class="testimonials__portrait-ring"></div>
            <img src="<?php echo get_theme_file_uri( '/assets/img/franchisees/kevin-white.webp' ); ?>" alt="Kevin White" loading="lazy" />
          </div>
          <blockquote class="testimonials__quote">
            <p>What we love about being Flying Biscuit operators is the training that was provided prior to opening, the incredible support from Corporate and honestly it feels like we are a part of a family. Best decision we ever made.</p>
          </blockquote>
          <div class="testimonials__attribution">
            <span class="testimonials__name">Kevin White</span>
            <span class="testimonials__divider" aria-hidden="true"></span>
            <span class="testimonials__role">Franchisee</span>
          </div>
        </div>

        <!-- Slide 2: Samra Malik -->
        <div class="testimonials__slide" data-slide="1">
          <div class="testimonials__portrait">
            <div class="testimonials__portrait-ring"></div>
            <img src="<?php echo get_theme_file_uri( '/assets/img/franchisees/samra-malik.jpg' ); ?>" alt="Samra Malik" loading="lazy" />
          </div>
          <blockquote class="testimonials__quote">
            <p>Every day, our team experiences insurmountable joy when our fresh ingredients and inclusive menu options bring a smile to our guests' faces. Due to the dynamic environment of our Brookhaven location, we proudly stay current with market trends.</p>
          </blockquote>
          <div class="testimonials__attribution">
            <span class="testimonials__name">Samra Malik</span>
            <span class="testimonials__divider" aria-hidden="true"></span>
            <span class="testimonials__role">Owner, Operator</span>
          </div>
        </div>

        <!-- Slide 3: Brad Rubenstein -->
        <div class="testimonials__slide" data-slide="2">
          <div class="testimonials__portrait">
            <div class="testimonials__portrait-ring"></div>
            <img src="<?php echo get_theme_file_uri( '/assets/img/franchisees/brad-rubenstein.jpg' ); ?>" alt="Brad Rubenstein" loading="lazy" />
          </div>
          <blockquote class="testimonials__quote">
            <p>They set you up with all the vendors and relationships, so you don't have to search for which baker or produce company to use. They guide you through the entire process, so extensive knowledge of the restaurant business isn't necessary to get involved, but a passion for the industry is essential.</p>
          </blockquote>
          <div class="testimonials__attribution">
            <span class="testimonials__name">Brad Rubenstein</span>
            <span class="testimonials__divider" aria-hidden="true"></span>
            <span class="testimonials__role">Franchisee</span>
          </div>
        </div>

      </div>

      <!-- Dots -->
      <div class="testimonials__dots">
        <button class="testimonials__dot is-active" aria-label="Testimonial 1" data-goto="0" type="button"></button>
        <button class="testimonials__dot" aria-label="Testimonial 2" data-goto="1" type="button"></button>
        <button class="testimonials__dot" aria-label="Testimonial 3" data-goto="2" type="button"></button>
      </div>

    </div>
  </div>
</section>
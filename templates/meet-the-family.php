<!-- ============================================
     The Flying Biscuit Café — Franchising
     Meet the Family Section
     v1.0
     ============================================ -->

<section class="family">
  <div class="family__inner">

    <!-- Header -->
    <div class="family__header">
      <p class="family__eyebrow">Our People</p>
      <h2 class="family__title">Meet The Flying Biscuit Family</h2>
      <blockquote class="family__quote">
        <p>"Honestly it feels like we are a part of a family. <span class="family__quote-accent">Best decision we ever made.</span>"</p>
        <cite class="family__cite">– Kevin White, Franchisee</cite>
      </blockquote>
    </div>

    <!-- Video -->
    <div
      class="family__video"
      id="familyVideo"
      data-youtube-id="9cSHBNVVsrc"
    >
      <!-- Poster -->
      <img
        src="<?php echo get_theme_file_uri( '/assets/img/thumbnails/join-fb-family-bg-photo.jpg' ); ?>"
        alt=""
        class="family__video-poster"
        id="familyVideoPoster"
        loading="lazy"
      />

      <!-- YouTube iframe injected here on play -->
      <div class="family__video-embed" id="familyVideoEmbed"></div>

      <!-- Play Button -->
      <button
        class="family__play-btn"
        id="familyPlayBtn"
        type="button"
        aria-label="Play video about the Flying Biscuit team"
      >
        <span class="family__play-icon"></span>
      </button>

      <!-- Close Button -->
      <button
        class="family__video-close"
        id="familyVideoClose"
        type="button"
        aria-label="Stop video"
      >
        <span aria-hidden="true">✕</span>
      </button>
    </div>

  </div>
</section>
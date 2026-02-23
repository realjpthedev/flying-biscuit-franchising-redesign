<?php
/**
 * Single Post Template
 * The Flying Biscuit Café — Franchising
 * v1.0
 */

// Prevent direct file access
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}


get_header();

$blog_page_url = get_permalink( get_page_by_path( 'blog' ) );
if ( ! $blog_page_url ) {
  $blog_page_url = home_url( '/blog/' );
}

while ( have_posts() ) : the_post();

$categories     = get_the_category();
$primary_cat    = $categories ? $categories[0] : null;
$post_url       = urlencode( get_the_permalink() );
$post_title_enc = urlencode( get_the_title() );
?>

<main class="single-post" id="main-content">

  <!-- ─── HERO HEADER ─── -->
  <div class="single-post__header">
    <div class="single-post__header-inner">

      <a href="<?php echo esc_url( $blog_page_url ); ?>" class="single-post__back">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"/></svg>
        Back to Blog
      </a>

      <div class="single-post__meta-top">
        <div class="single-post__author-row">
          <?php echo get_avatar( get_the_author_meta( 'ID' ), 32, '', '', array( 'class' => 'single-post__avatar' ) ); ?>
          <span class="single-post__author-name"><?php echo esc_html( get_the_author_meta( 'nickname' ) ); ?></span>
        </div>
        <span class="single-post__meta-sep" aria-hidden="true">·</span>
        <?php if ( $primary_cat ) : ?>
          <a href="<?php echo esc_url( get_category_link( $primary_cat->term_id ) ); ?>" class="single-post__cat">
            <?php echo esc_html( $primary_cat->name ); ?>
          </a>
        <?php endif; ?>
        <span class="single-post__date"><?php echo get_the_date( 'F j, Y' ); ?></span>
        <span class="single-post__meta-sep" aria-hidden="true">·</span>
        <span class="single-post__read-time">
          <?php
          $word_count = str_word_count( strip_tags( get_the_content() ) );
          $read_time  = max( 1, ceil( $word_count / 250 ) );
          echo esc_html( $read_time ) . ' min read';
          ?>
        </span>
      </div>

      <h1 class="single-post__title"><?php the_title(); ?></h1>

    </div>
  </div>

  <!-- ─── FEATURED IMAGE ─── -->
  <?php if ( has_post_thumbnail() ) : ?>
  <div class="single-post__hero-image">
    <div class="single-post__hero-image-inner">
      <img
        src="<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'full' ) ); ?>"
        alt="<?php the_title_attribute(); ?>"
        class="single-post__featured-img"
        loading="eager"
      />
    </div>
  </div>
  <?php endif; ?>

  <!-- ─── BODY (CONTENT + SIDEBAR) ─── -->
  <div class="single-post__body">
    <div class="single-post__body-inner">

      <!-- Content column -->
      <article class="single-post__content">

        <!-- Share buttons — sticky on scroll -->
        <div class="single-post__share">
          <span class="single-post__share-label">Share</span>
          <a
            href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $post_url; ?>"
            class="single-post__share-link"
            target="_blank"
            rel="noopener noreferrer"
            aria-label="Share on Facebook"
          >
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
          </a>
          <a
            href="https://twitter.com/intent/tweet?url=<?php echo $post_url; ?>&text=<?php echo $post_title_enc; ?>"
            class="single-post__share-link"
            target="_blank"
            rel="noopener noreferrer"
            aria-label="Share on X"
          >
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
          </a>
          <a
            href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $post_url; ?>"
            class="single-post__share-link"
            target="_blank"
            rel="noopener noreferrer"
            aria-label="Share on LinkedIn"
          >
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
          </a>
          <button
            class="single-post__share-link single-post__share-copy"
            type="button"
            aria-label="Copy link"
            data-url="<?php the_permalink(); ?>"
          >
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 007.54.54l3-3a5 5 0 00-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 00-7.54-.54l-3 3a5 5 0 007.07 7.07l1.71-1.71"/></svg>
          </button>
        </div>

        <!-- Post body content -->
        <div class="single-post__prose">
          <?php the_content(); ?>
        </div>

        <!-- Tags -->
        <?php
        $tags = get_the_tags();
        if ( $tags ) : ?>
        <div class="single-post__tags">
          <?php foreach ( $tags as $tag ) : ?>
            <a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" class="single-post__tag">
              <?php echo esc_html( $tag->name ); ?>
            </a>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <!-- Bottom share bar (mobile) -->
        <div class="single-post__share-bottom">
          <span class="single-post__share-label">Share this article</span>
          <div class="single-post__share-bottom-links">
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $post_url; ?>" class="single-post__share-link" target="_blank" rel="noopener noreferrer" aria-label="Share on Facebook">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
            </a>
            <a href="https://twitter.com/intent/tweet?url=<?php echo $post_url; ?>&text=<?php echo $post_title_enc; ?>" class="single-post__share-link" target="_blank" rel="noopener noreferrer" aria-label="Share on X">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
            </a>
            <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $post_url; ?>" class="single-post__share-link" target="_blank" rel="noopener noreferrer" aria-label="Share on LinkedIn">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
            </a>
            <button class="single-post__share-link single-post__share-copy" type="button" aria-label="Copy link" data-url="<?php the_permalink(); ?>">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 007.54.54l3-3a5 5 0 00-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 00-7.54-.54l-3 3a5 5 0 007.07 7.07l1.71-1.71"/></svg>
            </button>
          </div>
        </div>

        <!-- Prev / Next navigation -->
        <nav class="single-post__nav" aria-label="Post navigation">
          <?php
          $prev = get_previous_post();
          $next = get_next_post();
          ?>
          <?php if ( $prev ) : ?>
            <a href="<?php echo esc_url( get_permalink( $prev ) ); ?>" class="single-post__nav-link single-post__nav-link--prev">
              <span class="single-post__nav-dir">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"/></svg>
                Previous
              </span>
              <span class="single-post__nav-title"><?php echo esc_html( get_the_title( $prev ) ); ?></span>
            </a>
          <?php else : ?>
            <span class="single-post__nav-link single-post__nav-link--empty"></span>
          <?php endif; ?>

          <?php if ( $next ) : ?>
            <a href="<?php echo esc_url( get_permalink( $next ) ); ?>" class="single-post__nav-link single-post__nav-link--next">
              <span class="single-post__nav-dir">
                Next
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 6 15 12 9 18"/></svg>
              </span>
              <span class="single-post__nav-title"><?php echo esc_html( get_the_title( $next ) ); ?></span>
            </a>
          <?php endif; ?>
        </nav>

      </article>

      <!-- Sidebar -->
      <aside class="single-post__sidebar blog__sidebar">

        <!-- Categories -->
        <div class="blog__widget">
          <h4 class="blog__widget-title">Categories</h4>
          <ul class="blog__widget-list">
            <?php
            $all_cats = get_categories( array( 'orderby' => 'count', 'order' => 'DESC', 'number' => 8 ) );
            foreach ( $all_cats as $cat ) :
            ?>
              <li>
                <a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>" class="blog__widget-link">
                  <?php echo esc_html( $cat->name ); ?>
                  <span class="blog__widget-count"><?php echo esc_html( $cat->count ); ?></span>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>

        <!-- Recent Posts -->
        <div class="blog__widget">
          <h4 class="blog__widget-title">Recent Posts</h4>
          <ul class="blog__widget-recent">
            <?php
            $recent = new WP_Query( array(
              'post_type'      => 'post',
              'posts_per_page' => 4,
              'post_status'    => 'publish',
              'post__not_in'   => array( get_the_ID() ),
            ) );
            while ( $recent->have_posts() ) : $recent->the_post();
            ?>
              <li class="blog__recent-item">
                <a href="<?php the_permalink(); ?>" class="blog__recent-link">
                  <?php if ( has_post_thumbnail() ) : ?>
                    <img
                      src="<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'thumbnail' ) ); ?>"
                      alt="<?php the_title_attribute(); ?>"
                      class="blog__recent-thumb"
                      loading="lazy"
                    />
                  <?php endif; ?>
                  <div class="blog__recent-info">
                    <span class="blog__recent-title"><?php the_title(); ?></span>
                    <span class="blog__recent-date"><?php echo get_the_date( 'M j, Y' ); ?></span>
                  </div>
                </a>
              </li>
            <?php endwhile; wp_reset_postdata(); ?>
          </ul>
        </div>

        <!-- CTA widget -->
        <div class="blog__widget blog__widget--cta">
          <h4 class="blog__widget-cta-title">Ready to Own a Flying Biscuit?</h4>
          <p class="blog__widget-cta-desc">Take the first step toward franchise ownership today.</p>
          <a href="/contact/" class="blog__widget-cta-btn">
            Get Started
            <span aria-hidden="true">→</span>
          </a>
        </div>

      </aside>

    </div>
  </div>

  <!-- ─── RELATED POSTS ─── -->
  <?php
  $related_args = array(
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'post_status'    => 'publish',
    'post__not_in'   => array( get_the_ID() ),
    'orderby'        => 'rand',
  );
  if ( $primary_cat ) {
    $related_args['cat'] = $primary_cat->term_id;
  }
  $related = new WP_Query( $related_args );
  if ( $related->have_posts() ) :
  ?>
  <section class="single-post__related">
    <div class="single-post__related-inner">
      <h2 class="single-post__related-title">You Might Also Like</h2>
      <div class="single-post__related-grid">
        <?php while ( $related->have_posts() ) : $related->the_post(); ?>
          <article class="blog__card">
            <a href="<?php the_permalink(); ?>" class="blog__card-link">
              <?php if ( has_post_thumbnail() ) : ?>
                <div class="blog__card-image-wrap">
                  <img
                    src="<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'medium_large' ) ); ?>"
                    alt="<?php the_title_attribute(); ?>"
                    class="blog__card-image"
                    loading="lazy"
                  />
                </div>
              <?php else : ?>
                <div class="blog__card-image-wrap blog__card-image-wrap--placeholder">
                  <span class="blog__card-placeholder" aria-hidden="true">✦</span>
                </div>
              <?php endif; ?>
              <div class="blog__card-body">
                <?php $r_cats = get_the_category(); if ( $r_cats ) : ?>
                  <span class="blog__card-cat"><?php echo esc_html( $r_cats[0]->name ); ?></span>
                <?php endif; ?>
                <h3 class="blog__card-title"><?php the_title(); ?></h3>
                <div class="blog__card-meta">
                  <span class="blog__card-date"><?php echo get_the_date( 'M j, Y' ); ?></span>
                </div>
              </div>
            </a>
          </article>
        <?php endwhile; ?>
      </div>
    </div>
  </section>
  <?php
  wp_reset_postdata();
  endif;
  ?>

</main>

<?php endwhile; // end main loop ?>

<?php get_footer(); ?>
<?php
/**
 * Archive Template (Categories, Tags, Date Archives)
 * The Flying Biscuit Café — Franchising
 * v1.0
 */

get_header();

$blog_page_url = get_permalink( get_page_by_path( 'blog' ) );
if ( ! $blog_page_url ) {
  $blog_page_url = home_url( '/blog/' );
}

$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

// Archive title + description
$archive_title = '';
$archive_desc  = '';

if ( is_category() ) {
  $archive_title = single_cat_title( '', false );
  $archive_desc  = category_description();
} elseif ( is_tag() ) {
  $archive_title = single_tag_title( '', false );
  $archive_desc  = tag_description();
} elseif ( is_date() ) {
  if ( is_year() ) {
    $archive_title = get_the_date( 'Y' );
  } elseif ( is_month() ) {
    $archive_title = get_the_date( 'F Y' );
  } elseif ( is_day() ) {
    $archive_title = get_the_date( 'F j, Y' );
  }
} else {
  $archive_title = 'Archives';
}
?>

<main class="blog" id="main-content">

  <!-- Page header -->
  <div class="blog__header">
    <div class="blog__header-inner">
      <p class="blog__eyebrow">
        <?php
        if ( is_category() ) {
          echo 'Category';
        } elseif ( is_tag() ) {
          echo 'Tag';
        } elseif ( is_date() ) {
          echo 'Archive';
        } else {
          echo 'Archive';
        }
        ?>
      </p>
      <h1 class="blog__page-title"><?php echo esc_html( $archive_title ); ?></h1>
      <?php if ( $archive_desc ) : ?>
        <div class="blog__page-desc"><?php echo wp_kses_post( $archive_desc ); ?></div>
      <?php else : ?>
        <p class="blog__page-desc">
          <?php printf( 'Browsing %s posts in %s.', esc_html( $GLOBALS['wp_query']->found_posts ), esc_html( $archive_title ) ); ?>
        </p>
      <?php endif; ?>

      <a href="<?php echo esc_url( $blog_page_url ); ?>" class="blog__clear-search">← Back to all posts</a>
    </div>
  </div>

  <!-- ─── GRID + SIDEBAR ─── -->
  <div class="blog__body">
    <div class="blog__body-inner">

      <!-- Post grid -->
      <div class="blog__grid">
        <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); ?>
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
                  <?php
                  $cats = get_the_category();
                  if ( $cats ) : ?>
                    <span class="blog__card-cat"><?php echo esc_html( $cats[0]->name ); ?></span>
                  <?php endif; ?>
                  <h3 class="blog__card-title"><?php the_title(); ?></h3>
                  <p class="blog__card-excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 18, '…' ) ); ?></p>
                  <div class="blog__card-meta">
                    <span class="blog__card-date"><?php echo get_the_date( 'M j, Y' ); ?></span>
                    <span class="blog__card-sep" aria-hidden="true">·</span>
                    <span class="blog__card-author"><?php echo esc_html( get_the_author_meta( 'nickname' ) ); ?></span>
                  </div>
                </div>
              </a>
            </article>
          <?php endwhile; ?>
        <?php else : ?>
          <div class="blog__empty">
            <p class="blog__empty-text">No posts found in this archive.</p>
            <a href="<?php echo esc_url( $blog_page_url ); ?>" class="blog__empty-link">View all posts</a>
          </div>
        <?php endif; ?>
      </div>

      <!-- Sidebar -->
      <aside class="blog__sidebar">

        <!-- Categories -->
        <div class="blog__widget">
          <h4 class="blog__widget-title">Categories</h4>
          <ul class="blog__widget-list">
            <?php
            $categories = get_categories( array( 'orderby' => 'count', 'order' => 'DESC', 'number' => 8 ) );
            foreach ( $categories as $cat ) :
            ?>
              <li>
                <a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>" class="blog__widget-link<?php echo ( is_category( $cat->term_id ) ? ' blog__widget-link--active' : '' ); ?>">
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

  <!-- ─── PAGINATION ─── -->
  <?php if ( $GLOBALS['wp_query']->max_num_pages > 1 ) : ?>
  <nav class="blog__pagination" aria-label="Archive pagination">
    <div class="blog__pagination-inner">
      <?php
      echo paginate_links( array(
        'total'     => $GLOBALS['wp_query']->max_num_pages,
        'current'   => $paged,
        'prev_text' => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"/></svg><span class="sr-only">Previous</span>',
        'next_text' => '<span class="sr-only">Next</span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 6 15 12 9 18"/></svg>',
        'type'      => 'list',
        'mid_size'  => 1,
        'end_size'  => 1,
      ) );
      ?>
    </div>
  </nav>
  <?php endif; ?>

</main>

<?php get_footer(); ?>
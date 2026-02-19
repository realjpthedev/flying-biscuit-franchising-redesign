<?php
/**
 * Template Name: Blog
 * The Flying Biscuit Café — Franchising
 * Blog Archive / Index
 * v1.0
 */

get_header();

// Store the blog page URL before any queries
// Store the blog page URL — use queried object ID so it's immune to the_post() calls
$blog_page_url = get_permalink( get_queried_object_id() );

// Pagination
$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

// Search query
$search = isset( $_GET['blog_search'] ) ? sanitize_text_field( $_GET['blog_search'] ) : '';

// Main query args
$args = array(
  'post_type'      => 'post',
  'post_status'    => 'publish',
  'posts_per_page' => 9,
  'paged'          => $paged,
);

if ( $search ) {
  $args['s'] = $search;
}

$blog_query = new WP_Query( $args );

// Featured post — latest post (only on first page, no search)
$featured = null;
if ( $paged === 1 && ! $search ) {
  $featured_args = array(
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => 1,
  );
  $featured_query = new WP_Query( $featured_args );
  if ( $featured_query->have_posts() ) {
    $featured_query->the_post();
    $featured = array(
      'id'        => get_the_ID(),
      'title'     => get_the_title(),
      'excerpt'   => get_the_excerpt(),
      'permalink' => get_the_permalink(),
      'image'     => get_the_post_thumbnail_url( get_the_ID(), 'large' ),
      'date'      => get_the_date( 'M j, Y' ),
      'category'  => get_the_category() ? get_the_category()[0]->name : '',
      'cat_link'  => get_the_category() ? get_category_link( get_the_category()[0]->term_id ) : '',
      'author'    => get_the_author_meta( 'nickname' ),
    );
    wp_reset_postdata();
  }
}
?>

<main class="blog" id="main-content">

  <!-- Page header -->
  <div class="blog__header">
    <div class="blog__header-inner">
      <p class="blog__eyebrow">Our Blog</p>
      <h1 class="blog__page-title">
        <?php if ( $search ) : ?>
          Results for "<?php echo esc_html( $search ); ?>"
        <?php else : ?>
          Insights &amp; Updates
        <?php endif; ?>
      </h1>
      <p class="blog__page-desc">Stories, tips, and news from the Flying Biscuit Café franchise family.</p>

      <!-- Search -->
      <form class="blog__search" action="<?php echo esc_url( $blog_page_url ); ?>" method="get" role="search">
        <label for="blog-search" class="sr-only">Search blog posts</label>
        <input
          type="search"
          id="blog-search"
          name="blog_search"
          class="blog__search-input"
          placeholder="Search articles…"
          value="<?php echo esc_attr( $search ); ?>"
          autocomplete="off"
        />
        <button type="submit" class="blog__search-btn" aria-label="Search">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
        </button>
      </form>

      <?php if ( $search ) : ?>
        <a href="<?php echo esc_url( $blog_page_url ); ?>" class="blog__clear-search">← Back to all posts</a>
      <?php endif; ?>
    </div>
  </div>

  <?php
  // ─── FEATURED POST (page 1, no search) ───
  if ( $featured ) : ?>
  <section class="blog__featured">
    <div class="blog__featured-inner">
      <a href="<?php echo esc_url( $featured['permalink'] ); ?>" class="blog__featured-link" aria-label="<?php echo esc_attr( $featured['title'] ); ?>">
        <?php if ( $featured['image'] ) : ?>
          <div class="blog__featured-image-wrap">
            <img
              src="<?php echo esc_url( $featured['image'] ); ?>"
              alt="<?php echo esc_attr( $featured['title'] ); ?>"
              class="blog__featured-image"
              loading="eager"
            />
          </div>
        <?php endif; ?>
        <div class="blog__featured-content">
          <?php if ( $featured['category'] ) : ?>
            <span class="blog__card-cat"><?php echo esc_html( $featured['category'] ); ?></span>
          <?php endif; ?>
          <h2 class="blog__featured-title"><?php echo esc_html( $featured['title'] ); ?></h2>
          <p class="blog__featured-excerpt"><?php echo esc_html( $featured['excerpt'] ); ?></p>
          <div class="blog__card-meta">
            <span class="blog__card-date"><?php echo esc_html( $featured['date'] ); ?></span>
            <span class="blog__card-sep" aria-hidden="true">·</span>
            <span class="blog__card-author"><?php echo esc_html( $featured['author'] ); ?></span>
          </div>
        </div>
      </a>
    </div>
  </section>
  <?php endif; ?>

  <!-- ─── GRID + SIDEBAR ─── -->
  <div class="blog__body">
    <div class="blog__body-inner">

      <!-- Post grid -->
      <div class="blog__grid">
        <?php if ( $blog_query->have_posts() ) : ?>
          <?php while ( $blog_query->have_posts() ) : $blog_query->the_post(); ?>
            <?php
            // Skip featured post on page 1
            if ( $featured && get_the_ID() === $featured['id'] && $paged === 1 && ! $search ) {
              continue;
            }
            ?>
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
            <p class="blog__empty-text">No posts found<?php echo $search ? ' for "' . esc_html( $search ) . '"' : ''; ?>.</p>
            <?php if ( $search ) : ?>
              <a href="<?php echo esc_url( $blog_page_url ); ?>" class="blog__empty-link">View all posts</a>
            <?php endif; ?>
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
  <?php if ( $blog_query->max_num_pages > 1 ) : ?>
  <nav class="blog__pagination" aria-label="Blog pagination">
    <div class="blog__pagination-inner">
      <?php
      echo paginate_links( array(
        'total'     => $blog_query->max_num_pages,
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

<?php
wp_reset_postdata();
get_footer();
?>
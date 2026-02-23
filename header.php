<?php

// Prevent direct file access
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

?>

<?php
// ============================================
// The Flying Biscuit Café — Franchising
// header.php
// v1.0
// ============================================

// Navigation link definitions
$nav_links = [
  ['slug' => 'home',                  'label' => 'Home',                  'url' => '/'],
  ['slug' => 'steps-to-ownership',    'label' => 'Steps to Ownership',    'url' => '/steps-to-ownership/'],
  ['slug' => 'available-territories', 'label' => 'Available Territories', 'url' => '/available-territories/'],
  ['slug' => 'blog',                  'label' => 'Blog',                  'url' => '/blog/'],
  ['slug' => 'contact',               'label' => 'Contact',               'url' => '/contact/'],
];

// About Us dropdown links
$about_links = [
  ['slug' => 'why-us',   'label' => 'Why Us',   'url' => '/why-us/'],
  ['slug' => 'our-menu', 'label' => 'Our Menu',  'url' => '/our-menu/'],
  ['slug' => 'faq',      'label' => 'FAQ',       'url' => '/faq/'],
];

/**
 * Check if the current page matches a given slug
 */
function fb_is_active( $slug ) {
  if ( $slug === 'home' ) {
    return is_front_page();
  }
  if ( $slug === 'blog' ) {
    return is_home() || is_singular( 'post' ) || is_category() || is_tag() || is_archive();
  }
  return is_page( $slug );
}

// Check if any About Us child page is active
$about_is_active = false;
foreach ( $about_links as $link ) {
  if ( fb_is_active( $link['slug'] ) ) {
    $about_is_active = true;
    break;
  }
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <a href="#main-content" class="skip-link">Skip to content</a>

    <!-- Navbar -->
    <nav class="navbar" id="navbar" aria-label="Main navigation">
      <div class="navbar__inner">

        <!-- Logo -->
        <a href="/" class="navbar__logo" aria-label="Flying Biscuit Café Franchising — Home">
          <img
            src="<?php echo get_theme_file_uri( '/assets/img/logo-long.svg' ); ?>"
            alt="The Flying Biscuit Café"
            class="navbar__logo-img"
            width="180"
            height="61"
          />
        </a>

        <!-- Desktop Links -->
        <div class="navbar__links">

          <!-- Home -->
          <a
            href="/"
            class="navbar__link<?php echo is_front_page() ? ' is-active' : ''; ?>"
            <?php echo is_front_page() ? 'aria-current="page"' : ''; ?>
          >Home</a>

          <!-- About Us Dropdown -->
          <div class="navbar__dropdown" id="navDropdown">
            <button
              class="navbar__dropdown-trigger<?php echo $about_is_active ? ' is-active' : ''; ?>"
              type="button"
              aria-expanded="false"
              aria-haspopup="true"
              aria-controls="navDropdownMenu"
            >
              About Us
              <span class="navbar__dropdown-arrow" aria-hidden="true"></span>
            </button>
            <div class="navbar__dropdown-menu" id="navDropdownMenu">
              <?php foreach ( $about_links as $link ) :
                $active = fb_is_active( $link['slug'] );
              ?>
                <a
                  href="<?php echo esc_url( $link['url'] ); ?>"
                  class="navbar__dropdown-item<?php echo $active ? ' is-active' : ''; ?>"
                  <?php echo $active ? 'aria-current="page"' : ''; ?>
                ><?php echo esc_html( $link['label'] ); ?></a>
              <?php endforeach; ?>
            </div>
          </div>

          <!-- Remaining Links -->
          <?php foreach ( $nav_links as $link ) :
            if ( $link['slug'] === 'home' ) continue;
            $active = fb_is_active( $link['slug'] );
          ?>
            <a
              href="<?php echo esc_url( $link['url'] ); ?>"
              class="navbar__link<?php echo $active ? ' is-active' : ''; ?>"
              <?php echo $active ? 'aria-current="page"' : ''; ?>
            ><?php echo esc_html( $link['label'] ); ?></a>
          <?php endforeach; ?>

        </div>

        <!-- Desktop CTA -->
        <a href="/contact/" class="navbar__cta">Get Started</a>

        <!-- Hamburger (tablet/mobile) -->
        <button
          class="navbar__hamburger"
          id="navHamburger"
          type="button"
          aria-label="Open menu"
          aria-expanded="false"
          aria-controls="navDrawer"
        >
          <span class="navbar__hamburger-line" aria-hidden="true"></span>
          <span class="navbar__hamburger-line" aria-hidden="true"></span>
          <span class="navbar__hamburger-line" aria-hidden="true"></span>
        </button>
      </div>
    </nav>

    <!-- Mobile Overlay -->
    <div class="navbar__overlay" id="navOverlay" aria-hidden="true"></div>

    <!-- Mobile Drawer -->
    <div
      class="navbar__drawer"
      id="navDrawer"
      role="dialog"
      aria-modal="true"
      aria-label="Mobile navigation"
      aria-hidden="true"
    >
      <div class="navbar__drawer-header">
        <a href="/" class="navbar__logo" aria-label="Flying Biscuit Café Franchising — Home">
          <img
            src="<?php echo get_theme_file_uri( '/assets/img/logo-long.svg' ); ?>"
            alt="The Flying Biscuit Café"
            class="navbar__logo-img"
            width="180"
            height="61"
          />
        </a>
        <button
          class="navbar__drawer-close"
          id="navClose"
          type="button"
          aria-label="Close menu"
        >
          <span aria-hidden="true">✕</span>
        </button>
      </div>

      <nav class="navbar__drawer-body" aria-label="Mobile navigation links">

        <!-- Home -->
        <a
          href="/"
          class="navbar__drawer-link<?php echo is_front_page() ? ' is-active' : ''; ?>"
          <?php echo is_front_page() ? 'aria-current="page"' : ''; ?>
        >Home</a>

        <!-- About Us Accordion -->
        <div class="navbar__drawer-dropdown" id="navDrawerDropdown">
          <button
            class="navbar__drawer-dropdown-trigger<?php echo $about_is_active ? ' is-active' : ''; ?>"
            type="button"
            aria-expanded="false"
            aria-controls="navDrawerDropdownMenu"
          >
            About Us
            <span class="navbar__drawer-dropdown-arrow" aria-hidden="true"></span>
          </button>
          <div class="navbar__drawer-dropdown-menu" id="navDrawerDropdownMenu" role="group">
            <?php foreach ( $about_links as $link ) :
              $active = fb_is_active( $link['slug'] );
            ?>
              <a
                href="<?php echo esc_url( $link['url'] ); ?>"
                class="navbar__drawer-link<?php echo $active ? ' is-active' : ''; ?>"
                <?php echo $active ? 'aria-current="page"' : ''; ?>
              ><?php echo esc_html( $link['label'] ); ?></a>
            <?php endforeach; ?>
          </div>
        </div>

        <div class="navbar__drawer-divider" role="separator"></div>

        <!-- Remaining Links -->
        <?php foreach ( $nav_links as $link ) :
          if ( $link['slug'] === 'home' ) continue;
          $active = fb_is_active( $link['slug'] );
        ?>
          <a
            href="<?php echo esc_url( $link['url'] ); ?>"
            class="navbar__drawer-link<?php echo $active ? ' is-active' : ''; ?>"
            <?php echo $active ? 'aria-current="page"' : ''; ?>
          ><?php echo esc_html( $link['label'] ); ?></a>

          <?php if ( $link['slug'] === 'available-territories' ) : ?>
            <div class="navbar__drawer-divider" role="separator"></div>
          <?php endif; ?>
        <?php endforeach; ?>

      </nav>

      <div class="navbar__drawer-footer">
        <a href="/contact" class="navbar__drawer-cta">Get Started</a>
      </div>
    </div>

    <!-- Page wrapper for sticky footer -->
    <main id="main-content" class="page-wrapper">
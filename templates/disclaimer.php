<?php
/**
 * Partial: FDD Legal Disclaimer Dropdown
 * The Flying Biscuit Café — Franchising
 *
 * Usage: <?php $disclaimer_id = 'unique-id'; include( get_theme_file_path( '/template-parts/disclaimer.php' ) ); ?>
 * Pass a unique $disclaimer_id before including to avoid duplicate IDs on the same page.
 */

// Prevent direct file access
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

if ( ! isset( $disclaimer_id ) ) {
  $disclaimer_id = 'disclaimer-' . wp_rand();
}
?>

<div class="disclaimer">
  <button
    class="disclaimer__toggle"
    id="<?php echo esc_attr( $disclaimer_id ); ?>Toggle"
    type="button"
    aria-expanded="false"
    aria-controls="<?php echo esc_attr( $disclaimer_id ); ?>Body"
  >
    <span class="disclaimer__toggle-text">* Legal Disclaimers &amp; FDD Details</span>
    <span class="disclaimer__toggle-arrow" aria-hidden="true"></span>
  </button>
  <div
    class="disclaimer__body"
    id="<?php echo esc_attr( $disclaimer_id ); ?>Body"
    role="region"
    aria-labelledby="<?php echo esc_attr( $disclaimer_id ); ?>Toggle"
  >
    <div class="disclaimer__content">
      <p>Refer to Item 7 of our Franchise Disclosure Document ("FDD") for information regarding estimated initial investment. Refer to Item 19 of our FDD for financial performance representations.</p>
      <p>*Represents the average Annual Unit Volume ("AUV") of $2,036,644, measured as Gross Sales, for 30 stabilized Flying Biscuit Café restaurants that were open and operating for 24 or more months, as disclosed in Item 19 of our Franchise Disclosure Document dated May 7, 2026. Individual results may vary. There is no assurance that you will earn as much. Please refer to Item 19 of the FDD for complete details, definitions, assumptions, and limitations.</p>
      <p>This information is not intended as an offer to sell or the solicitation of an offer to buy a franchise. An offer can only be made through the delivery of a Franchise Disclosure Document in compliance with applicable law.</p>
      <p>Currently, certain states regulate the offer and sale of franchises, including California, Hawaii, Illinois, Indiana, Maryland, Michigan, Minnesota, New York, North Dakota, Rhode Island, South Dakota, Virginia, Washington, and Wisconsin. If you are a resident of one of these states, or are seeking to purchase a franchise to be located in one of these states, we will not offer you a franchise unless and until we have complied with applicable registration and disclosure requirements in your jurisdiction.</p>
      <p><strong>New York Disclaimer:</strong> An offering can only be made by prospectus filed first with the Department of Law of the State of New York. Such filing does not constitute approval by the Department of Law.</p>
      <p>This website and the franchise sales information on this website do not constitute an offer to sell a franchise. We do not direct franchise offers to any state requiring registration until the franchise has been properly registered, excluded, exempted, or otherwise qualified for offering in that state.</p>
      <p>&copy; <?php echo date('Y'); ?> The Flying Biscuit Café | 6090 Roswell Rd, Sandy Springs, GA 30328</p>
    </div>
  </div>
</div>
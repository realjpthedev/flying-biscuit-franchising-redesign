<?php
/**
 * Partial: FDD Legal Disclaimer Dropdown
 * The Flying Biscuit Café — Franchising
 *
 * Usage: <?php $disclaimer_id = 'unique-id'; include( get_theme_file_path( '/template-parts/disclaimer.php' ) ); ?>
 * Pass a unique $disclaimer_id before including to avoid duplicate IDs on the same page.
 */

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
      <p>Refer to our FDD Item 7 for specifics on startup costs. Refer to our FDD Item 19 for specifics on revenue projections.</p>
      <p>*Represents the average Annual Unit Volume (AUV) (measured as Gross Sales) during 2023 for The Flying Biscuit Café. The data is based on five company-owned Restaurants and 21 franchised Restaurants that were open and operating from January 1, 2023, through December 31, 2023. In 2023, the average Gross Sales for the five company-owned Restaurants were $1,965,740.65, and for the 21 franchisee-owned Restaurants, the average Gross Sales were $1,990,089.17. Individual results may vary. There is no assurance that you will earn as much. For complete information, please see Item 19 in our Franchise Disclosure Document dated April 24, 2024.</p>
      <p>This information is not intended as an offer to sell or the solicitation of an offer to buy a franchise. It is for information purposes only. The offering is by prospectus only. Currently, the following states regulate the offer and sale of franchises: California, Hawaii, Illinois, Indiana, Maryland, Michigan, Minnesota, New York, North Dakota, Oregon, Rhode Island, South Dakota, Virginia, Washington, and Wisconsin. If you are a resident or want to locate a franchise in one of these states, we will not offer you a franchise unless and until we have complied with applicable presale registration and disclosure requirements in your state.</p>
      <p><strong>New York State Disclaimer:</strong> This advertisement is not an offering. An offering can only be made by prospectus filed first with the Department of Law of the State of New York. Such filing does not constitute approval by the Department of Law.</p>
      <p><strong>Disclaimer:</strong> This website and the franchise sales information on this site do not constitute an offer to sell a franchise. The offer of a franchise can only be made through the delivery of a Franchise Disclosure Document (FDD). Certain states require that we register the FDD in those states. The communications on this website are not directed by us to the residents of any of those states. Moreover, we will not offer or sell franchises in those states until we have registered the franchise (or obtained an applicable exemption from registration) and delivered the FDD to the prospective franchisee in compliance with applicable law.</p>
      <p><strong>California Disclaimer:</strong> The Flying Biscuit Café franchises are not currently being offered to residents of California. We will not offer or sell franchises in California until we have registered the franchise or obtained an applicable exemption from registration.</p>
      <p>©The Flying Biscuit Café – 6090 Roswell Rd Sandy Springs, GA 30328 ©2024 The Flying Biscuit Café.</p>
    </div>
  </div>
</div>
<?php
/**
 * @var $portfolioID int
 * @var $view_slug string
 * @var $portfolioShowLoading
 * @var $portfolio_gallery_get_options
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<section id="huge_it_portfolio_container_<?php echo $portfolioID; ?>" data-object-name="<?php echo "images_obj_".$portfolioID; ?>">
	<div id="huge-it-container-loading-overlay_<?php echo $portfolioID; ?>"></div>
	<div id="huge_it_portfolio_content_<?php echo $portfolioID; ?>"
			 class="portfolio-gallery-content elastic_grid view-<?php echo $view_slug ?>"
		 	 data-show-loading="<?php echo $portfolioShowLoading; ?>"
			 data-image-behaviour="<?php echo $portfolio_gallery_get_options['portfolio_gallery_ht_view7_image_behaviour']; ?>">

	</div>
</section>
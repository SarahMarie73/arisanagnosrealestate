<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class Portfolio_Gallery_Lightbox_Options {

	/**
	 * Portfolio_Gallery_Lightbox_Options constructor.
	 */
	public function __construct() {
		add_action( 'portfolio_gallery_save_lightbox_options', array( $this, 'save_options' ) );
	}

	/**
	 * Loads Lightbox options page
	 */
	public function load_page() {
		if ( isset( $_GET['page'] ) && $_GET['page'] == 'Options_portfolio_lightbox_styles' ) {
            $this->show_page();
		}
	}

	/**
	 * Shows Lightbox options page
	 */
	public function show_page() {
		require( PORTFOLIO_GALLERY_TEMPLATES_PATH.DIRECTORY_SEPARATOR.'admin'.DIRECTORY_SEPARATOR.'portfolio-gallery-admin-lightbox-options-html.php' );
	}
}
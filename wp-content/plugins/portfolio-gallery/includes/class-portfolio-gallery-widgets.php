<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
/**
 * Class Portfolio_Gallery_Widgets
 */
class Portfolio_Gallery_Widgets {

	/**
	 * Portfolio_Gallery_Widgets constructor.
	 */
	public function __construct() {
		add_action( 'widgets_init', array($this,'register_widget'));
	}

	/**
	 * Register Huge-IT Portfolio Gallery Widget
	 */
	public function register_widget(){
		register_widget( 'Huge_It_Portfolio_Widget' );
	}
}

new Portfolio_Gallery_Widgets();

<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<div class="wrap">
	<?php require(PORTFOLIO_GALLERY_TEMPLATES_PATH.DIRECTORY_SEPARATOR.'admin'.DIRECTORY_SEPARATOR.'portfolio-gallery-admin-free-banner.php');?>
	<?php require(PORTFOLIO_GALLERY_TEMPLATES_PATH.DIRECTORY_SEPARATOR.'admin'.DIRECTORY_SEPARATOR.'portfolio-gallery-admin-chrismas-banner-html.php');?>
	<div style="margin-left: -20px;position: relative" id="poststuff">
		<p class="pro_info">
			These features are available in the Professional version of the plugin only.
			<a href="http://huge-it.com/portfolio-gallery/" target="_blank" class="button button-primary">Enable</a>
		</p>
		<div class="portfolio_lightbox_options_grey_overlay"></div>
		<img style="width: 100%;" src="<?php echo esc_attr(PORTFOLIO_GALLERY_IMAGES_URL.'/admin_images/lightbox_options.jpg');?>">
	</div>
</div>

<input type="hidden" name="option" value=""/>
<input type="hidden" name="task" value=""/>
<input type="hidden" name="controller" value="options"/>
<input type="hidden" name="op_type" value="styles"/>
<input type="hidden" name="boxchecked" value="0"/>
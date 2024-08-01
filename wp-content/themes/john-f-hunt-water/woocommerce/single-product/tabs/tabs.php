<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.8.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$product_tabs = apply_filters( 'woocommerce_product_tabs', array() );

	$engineSpecification = get_post_meta(get_the_ID(), 'engineSpecification', true);
	$primingSystem = get_post_meta(get_the_ID(), 'primingSystem', true);
	$optionsAccessories = get_post_meta(get_the_ID(), 'optionsAccessories', true);
	$packageSpecifications = get_post_meta(get_the_ID(), 'packageSpecifications', true);
	$mechanicalDimensionsAndWeights = get_post_meta(get_the_ID(), 'mechanicalDimensionsAndWeights', true);
	$performanceCurve = get_post_meta(get_the_ID(), 'performanceCurve', true);
	$features = get_post_meta(get_the_ID(), 'features', true);
	$hight_head = get_post_meta(get_the_ID(), 'hight_head', true);
	
	if($engineSpecification){
		product_specific_ui('Engine Specification', $engineSpecification, 'blue');
	}
	if($primingSystem){
		product_specific_ui('Priming System', $primingSystem, 'blue');
	}
	if($optionsAccessories){
		product_specific_ui('Options and Accessories', $optionsAccessories, 'blue');
	 }
	if($packageSpecifications){
		product_specific_ui('Package Specifications', $packageSpecifications, 'blue');
	 }

	 if($mechanicalDimensionsAndWeights){
		product_specific_ui('Mechanical Dimensions & Weights', $mechanicalDimensionsAndWeights, 'blue');
	 }
	 if($performanceCurve){
		product_specific_ui('Performance Curve', $performanceCurve, 'blue');
	 }
	 if($features){
		product_specific_ui('Features ', $features, 'blue');
	 }
	 if($hight_head){
		product_specific_ui('High Head ', $hight_head, 'blue');
	 }

	
	?>
	<div class="buttons-wrapper clearfix">
		<?php get_template_part('includes/enquire-buttons', 'water');?>
	</div>
	
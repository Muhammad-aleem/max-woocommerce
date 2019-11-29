<?php
/**
 * Content wrappers
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/wrapper-start.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


?>
<main>

	<!-- Page Banner -->
	<div class="page-banner container-fluid no-padding">
		<!-- Container -->
		<div class="container">
			<div class="banner-content">
				<h3><?php woocommerce_page_title(); ?></h3>
				<p>our vision is to be Earth's most customer centric company</p>
			</div>
			<?php woocommerce_breadcrumb();?>
		</div><!-- Container /- -->
	</div><!-- Page Banner /- -->

	<!-- Product Section2 -->
	<div class="product-section product-section1 product-section2 container-fluid no-padding">
		<!-- Container -->
		<div class="container">
			<div class="row">
				<?php get_sidebar( 'shop' );?>
				<div class="col-md-8 col-sm-7 col-xs-12 content-area product-section2 no-left-padding">
			
				<?php


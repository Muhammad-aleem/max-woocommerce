<?php
function wocommerce_shop_page_widget_area() {
    register_sidebar( array(
        'name' => __( 'Shop Page', 'Shop page' ),
        'id' => 'max_shop_page',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget'  => '</aside>',
	'before_title'  => '<h3 class="widget-title">',
	'after_title'   => '</h3>',
    ) );
}

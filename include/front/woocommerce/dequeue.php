<?php


function max_wc_dequeue_styles($enqueue_styles)
{
    if (is_shop() || is_product_category() || is_product_tag()) {
        unset($enqueue_styles['woocommerce-general']);
        unset($enqueue_styles['woocommerce-layout']);
        unset($enqueue_styles['woocommerce-smallscreen']);
    }
    return $enqueue_styles;
}

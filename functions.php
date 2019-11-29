 <?php
    // ========== constant ========
    define('theme_path', get_template_directory());
    define('theme_url', get_template_directory_uri());

    // ========== end constant ========
    //========= include files ======== 
    include(theme_path . '/include/front/enqueue.php');
    include(theme_path . '/include/front/woocommerce/dequeue.php');
    include(theme_path . '/include/front/woocommerce/whislist_markup.php');
    include(theme_path . '/include/front/woocommerce/sidebar.php');
    include(theme_path . '/include/front/woocommerce/widget.php');
    include(theme_path . '/include/front/woocommerce/product_catagory_wid.php');
    include(theme_path . '/include/front/woocommerce/price_filter_wid.php');
    include(theme_path . '/include/front/woocommerce/product_ajax_php.php');
    include(theme_path . '/include/front/woocommerce/product_filter_php.php');
    include(theme_path . '/include/support.php');
    //========= End include files ======== 

    // ======== Hooks ===========  

    remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
    remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
    remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);
    remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);
    remove_action('woocommerce_after_shop_loop', 'woocommerce_pagination', 10);

    add_action('wp_enqueue_scripts', 'max_style_scriptes');
    add_filter('woocommerce_enqueue_styles', 'max_wc_dequeue_styles');
    add_action('woocommerce_after_shop_loop_item', 'product_max_shop_layout', 15);
    add_action('widgets_init', 'wocommerce_shop_page_widget_area');
    add_action('widgets_init', 'register_widget_area');
    add_action('widgets_init', 'register_widget_product_category');
    add_action('widgets_init', 'register_widget_price_filter');
    add_action("wp_ajax_search_wid_action_name", "my_wid_search_ajax_handler_function");
    add_action(" wp_ajax_nopriv_search_wid_action_name", "my_wid_search_ajax_handler_function");
    // price filter
    add_action("wp_ajax_filter_wid_action_name", "my_wid_filter_ajax_handler_function");
    add_action(" wp_ajax_nopriv_filter_wid_action_name", "my_wid_filter_ajax_handler_function");


    
// ======== End hooks ========

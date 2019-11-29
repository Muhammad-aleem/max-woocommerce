<?php
function max_style_scriptes()
{
    wp_register_style('fonts.googleapis.com/css?family=Arizonia', 'https://fonts.googleapis.com/css?family=Arizonia|Crimson+Text:400,400i,600,600i,700,700i|Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet', array(), '1.1', 'all');
    wp_register_style('settings.css', theme_url . '/revolution/css/settings.css', array(), '1.0');
    wp_register_style('layers.css', theme_url . '/revolution/css/layers.css', array(), '1.0');
    wp_register_style('navigation.css', theme_url . '/revolution/css/navigation.css', array(), '1.0');
    wp_register_style('lib.css', theme_url . '/libraries/lib.css', array(), '1.0');
    wp_register_style('plugins.css', theme_url . '/css/plugins.css', array(), '1.0');
    wp_register_style('navigation-menu.css', theme_url . '/css/navigation-menu.css', array(), '1.0');
    wp_register_style('shortcode.css', theme_url . '/css/shortcode.css', array(), '1.0');
    wp_register_style('style.css', theme_url . '/style.css', array(), '1.0');

    wp_enqueue_style('fonts.googleapis.com/css?family=Arizonia');
    wp_enqueue_style('settings.css');
    wp_enqueue_style('layers.css');
    wp_enqueue_style('navigation.css');
    wp_enqueue_style('lib.css');
    wp_enqueue_style('plugins.css');
    wp_enqueue_style('navigation-menu.css');
    wp_enqueue_style('shortcode.css');
    wp_enqueue_style('style.css');
    // ==== Script
    wp_register_script('lib.js',theme_url.'/libraries/lib.js',array('jquery'),'1,0',true);
    wp_register_script('countdown.minlib.js',theme_url.'/libraries/jquery.countdown.min.js',array('jquery'),'1,0',true);
    wp_register_script('themepunch.tools.min.js',theme_url.'/revolution/js/jquery.themepunch.tools.min.js?rev=5.0',array('jquery'),'1,0',true);
    wp_register_script('themepunch.revolution.min',theme_url.'/revolution/js/jquery.themepunch.revolution.min.js',array('jquery'),'1,0',true);
    wp_register_script('extension.video',theme_url.'/revolution/js/extensions/revolution.extension.video.min.js',array('jquery'),'1,0',true);
    wp_register_script('extension.slideanims',theme_url.'/revolution/js/extensions/revolution.extension.slideanims.min.js',array('jquery'),'1,0',true);
    wp_register_script('extension.layeranimation',theme_url.'/revolution/js/extensions/revolution.extension.layeranimation.min.js',array('jquery'),'1,0',true);
    wp_register_script('.extension.navigation',theme_url.'/revolution/js/extensions/revolution.extension.navigation.min.js',array('jquery'),'1,0',true);
    wp_register_script('extension.actions',theme_url.'/revolution/js/extensions/revolution.extension.actions.min.js',array('jquery'),'1,0',true);
    wp_register_script('functions',theme_url.'/js/functions.js',array('jquery'),'1,0',true);
    wp_register_script('product search',theme_url.'/js/product_search.js',array('jquery'),'1,0',true);
    wp_register_script('category_filter',theme_url.'/js/category.js',array('jquery'),'1,0',true);
    


    wp_register_script('script_registering', theme_url . '/js/product_search.js');
      wp_localize_script('script_registering', 'my_ajax_object', array('ajaxurl' => admin_url('admin-ajax.php'),
      'ajax_nonce_security' => wp_create_nonce('nonce_security')));
      wp_enqueue_script('script_registering');

      // product_filter
      wp_register_script('product_filter',theme_url.'/js/product_filter.js',array('jquery'),'1,0',true);

      wp_register_script('script_registering', theme_url . '/js/product_filter.js');
      wp_localize_script('script_registering', 'my_ajax_object', array('ajaxurl' => admin_url('admin-ajax.php'),
      'product_filter_security' => wp_create_nonce('filter_security')));
      wp_enqueue_script('script_registering');
      // end  product_filter
      //  category filter
      wp_register_script('category_filter',theme_url.'/js/category.js',array('jquery'),'1,0',true);

      wp_register_script('script_registering', theme_url . '/js/category.js');
      wp_localize_script('script_registering', 'my_ajax_object', array('ajaxurl' => admin_url('admin-ajax.php'),
      'category_filter_security' => wp_create_nonce('category_security')));
      wp_enqueue_script('script_registering');
      // end ategory filter
    
    wp_enqueue_script('lib.js');
    wp_enqueue_script('countdown.minlib.js');
    wp_enqueue_script('themepunch.tools.min.js');
    wp_enqueue_script('themepunch.revolution.min');
    wp_enqueue_script('extension.video');
    wp_enqueue_script('extension.slideanims');
    wp_enqueue_script('extension.layeranimation');
    wp_enqueue_script('.extension.navigation');
    wp_enqueue_script('extension.actions');
    wp_enqueue_script('functions');
    wp_enqueue_script('product search');
    wp_enqueue_script('product_filter');
    wp_enqueue_script('category_filter');
    
}

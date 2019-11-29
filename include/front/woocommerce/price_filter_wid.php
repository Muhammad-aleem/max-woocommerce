<?php

/*
Plugin Name: Price filter

*/

if (!class_exists('price_filter')) {
    class price_filter extends wp_widget
    {
        public function __construct()
        {
            $widget_ops = array(
                'classname' => 'widget_price_filter',
                'description' => 'My Maxshop ',
            );
            parent::__construct('price_filter', 'Cmt Shop price', $widget_ops);
        }

        public function form($instance)
        {
            $title = $instance['title']; ?>
            <p>
                <label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
                <input type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $title; ?>">

            </p>


<?php
        }
        public function update($new_instance, $old_instance)
        {
            $instance = $old_instance;
            $instance['title'] = $new_instance['title'];


            return $instance;
        }
        public function widget($args, $instance)
        {
            global $wp_query;
            $wp_query->query_var['product_cat'];
            $is_cat_pro_shop = $wp_query->query_vars['product_cat'];
            if ($is_cat_pro_shop) {
                $category = get_term_by('name', $is_cat_pro_shop, 'product_cat');
                $category_id = $category->term_id;
                $is_archive='<input type="hidden" id="is_archive" value="'.$category_id.'"';

            }else{
                $is_archive='<input type="hidden" id="is_archive" value="0"';

            }

            $widget_coun = '<div class="price-filter">
                                <div id="slider-range"></div>
                                <div class="price-input">									
                                    <span id="amount"></span>
                                    <span id="amount2"></span>
                                </div>
                                <a href="#" title="filter">Filter</a>
                            </div>
                            <input type="hidden" value="" id="minprice">
                            <input type="hidden" value="" id="maxprice">
                            '.$is_archive;



            echo $args['before_widget']; // <aside>
            echo $args['before_title']; // <h2>
            echo $instance['title'];
            echo $args['after_title'];   //</h2>
            // echo '<p>'.$instance['type'].'</p>';
            echo $widget_coun . $args['after_widget']; //</aside>





        }
    }
    function register_widget_price_filter()
    {
        register_widget('price_filter');
    }
}

?>
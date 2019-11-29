<?php

/*
Plugin Name: Product category 

*/

if (!class_exists('Product_category')) {
    class Product_category extends wp_widget
    {
        public function __construct()
        {
            $widget_ops = array(
                'classname' => 'widget_categories',
                'description' => 'My Maxshop ',
            );
            parent::__construct('Product_category', 'Max Shop category  Widgets', $widget_ops);
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
                $is_archive = '<input type="hidden" id="is_archive" value="' . $category_id . '"';
            } else {
                $is_archive = '<input type="hidden" id="is_archive" value="0"';
            }

            if ($is_cat_pro_shop) {
                $category = get_term_by('name', $is_cat_pro_shop, 'product_cat');
                $category_id = $category->term_id;

                $term_children = get_term_children($category_id, 'product_cat');

                if (count($term_children)) {
                    $widget_coun = '<ul class="pro_cat_list">';
                    foreach ($term_children as $term_child) {
                        $term = get_term_by('id', $term_child, 'product_cat');


                        $widget_coun .= '<li><input type="checkbox" class="pro_cat" value="' . $term->id . '"><a href="#" title="' . $term->name . '">' . $term->name . '<span>(' . $term->count . ')</span></a></li>';
                    }
                    $widget_coun .= '</ul>' . $is_archive;
                }
                echo $args['before_widget']; // <aside>
                echo $args['before_title']; // <h2>
                echo $instance['title'];
                echo $args['after_title'];   //</h2>
                // echo '<p>'.$instance['type'].'</p>';
                echo $widget_coun . $args['after_widget']; //</aside>
            } else {
                $terms = get_terms(array(
                    'taxonomy' => 'product_cat',
                    'hide_empty' => false,
                ));
                if (count($terms)) {
                    $widget_coun .= '<ul class="pro_cat_list">';
                    foreach ($terms as $term) {
                        $widget_coun .= '<li><input type="checkbox" class="pro_cat" value="' . $term->id . '"><a href="#" title="' . $term->name . '">' . $term->name . '<span>(' . $term->count . ')</span></a></li>';
                    }
                    $widget_coun .= '</ul>'.$is_archive;
                }
                echo $args['before_widget']; // <aside>
                echo $args['before_title']; // <h2>
                echo $instance['title'];
                echo $args['after_title'];   //</h2>
                // echo '<p>'.$instance['type'].'</p>';
                echo $widget_coun . $args['after_widget']; //</aside>
            };
        }
    }
    function register_widget_product_category()
    {
        register_widget('Product_category');
    }
}

?>
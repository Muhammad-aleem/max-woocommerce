<?php
/*
Plugin Name: Ajax Search 
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: This is not just a plugin
Author: Aleem
Version: 1.7.1
*/

if (!class_exists('Product_secrch')) {
    class Product_secrch extends wp_widget
    {
        public function __construct()
        {
            $widget_ops = array(
                'classname' => 'widget_search',
                'description' => 'My Maxshop ',
            );
            parent::__construct('Product_secrch', 'Max Shop search  Widgets', $widget_ops);
        }

        public function form($instance)
        {
            $title = $instance['title'];
            $per_page_search = $instance['per_page_search'];
            ?>

            <p>
                <label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
                <input type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $title; ?>">

            </p>
            <p>
                <label for="<?php echo $this->get_field_id('per_page_search'); ?>">Search Result:</label>

                <input type="number" id="<?php echo $this->get_field_id('per_page_search'); ?>" name="<?php echo $this->get_field_name('per_page_search'); ?>" value="<?php echo $per_page_search; ?>">
            </p>


<?php
        }
        public function update($new_instance, $old_instance)
        {
            $instance = $old_instance;
            $instance['title'] = $new_instance['title'];
            $instance['per_page_search'] = $new_instance['per_page_search'];


            return $instance;
        }
        public function widget($args, $instance)
        {
            // $title = $instance['title']? $instance['title']:'Search';
            $per_page_search = $instance['per_page_search'] ? $instance['per_page_search'] : 5;
            $widget_content = '<div class="input-group">
                <input type="text" class="form-control" id="widget_search_id" placeholder="Search You Wants. . .">
                <input type="hidden" id="search_wid_per_id" value="' . $per_page_search . '" >
                <span class="input-group-btn">
                    <button class="btn btn-search" title="Search" type="button"><i class="icon icon-Search"></i></button>
                </span>
            </div>
            <div class="Search_result_wrap">
           
            </div>
            
            
            
            ';
            echo $args['before_widget']; // <aside>
            echo $args['before_title']; // <h2>
            echo $instance['title'];
            echo $args['after_title'];   //</h2>
            // echo '<p>'.$instance['type'].'</p>';
            echo $widget_content . $args['after_widget']; //</aside>
        }
    }
    function register_widget_area()
    {
        register_widget('Product_secrch');
    }
}

?>
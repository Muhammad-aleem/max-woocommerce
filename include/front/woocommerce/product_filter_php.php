<?php
function my_wid_filter_ajax_handler_function(){
    $data = $_POST['data'];
    $minprice = sanitize_text_field($data['minprice']);
    $maxprice = sanitize_text_field($data['maxprice']);
    $is_archive = sanitize_text_field($data['is_archive']);
    if (!check_ajax_referer('filter_security', 'security')) {
        wp_send_json('some problem');
        die();
    }

    $args=array(
        "post_type"=>"product",
        "posts_per_page"=>5,
        "meta-query"=> array(
            array(
                'key'=>'_price',
                'value'=>$minprice,
                'compare'=>'>=',
                'type'=>'numeric'
            ),
            array(
                'key'=>'_price',
                'value'=>$maxprice,
                'compare'=>'<=',
                'type'=>'numeric'
            ),

        )


    );
    if($is_archive==0){

    }else{
        $args['tax_query'] = array(
           
            array(
                'taxonomy' => 'product_cat',
                'field'    => 'term_id',
                'terms'    => array($is_archive ),
                'operator' => 'IN',
            )
            );

    }
    $the_query = new WP_Query( $args );
 
    // The Loop
    if ( $the_query->have_posts() ) {
    
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            wc_get_template_part( 'content', 'product' );
          
        }
        wp_reset_query();
         /* Restore original Post Data */
    wp_reset_postdata();
    
    } else {
       wp_send_json( 'Some Problem!' );
    }
   

    die();
}
?>

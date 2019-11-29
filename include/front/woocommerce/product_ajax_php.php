<?php
function my_wid_search_ajax_handler_function()
{
    $data = $_POST['data'];
    $query_text = sanitize_text_field($data['query_text']);
    $per_page = sanitize_text_field($data['per_page']);
    if (!check_ajax_referer('nonce_security', 'security')) {
        wp_send_json('some problem');
        die();
    }
    // query
    // The Query
    $the_query = new WP_Query(array(
        'post_type' => 'product',
        'posts_per_page' =>  $per_page,
        's' =>  $query_text

    ));

    // The Loop
    if ($the_query->have_posts()) {
        $response = ' <div class="Search_results">';
        while ($the_query->have_posts()) {
            $the_query->the_post();
            $response .= ' <div class="Search_result">
            <a href="' . get_the_permalink() . '">
            <img src="' . get_the_post_thumbnail_url(get_the_ID()) . '" alt="Post">
            <h6>'.get_the_title().'</h6>
            </a>
            </div>';
        }
        $response .= '</div>';
          /* Restore original Post Data */
        wp_reset_postdata();
    wp_send_json($response);
    } else {
        wp_send_json('No product Found');
    }
  
    





    // query
    wp_send_json($query_text . $per_page);

    die();
}

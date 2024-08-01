
<?php 
 $default = array(
    'id' => '#',
);
$a = shortcode_atts($default, $atts);
print_r($a);
    $args = array('post_type' => 'product', 'category__in' =>array($a['id']), 'post_status' => 'publish', 'order' => 'ASC', 'showposts' => 5, );
    $fe_query= new WP_Query( $args );
    if ( $fe_query->have_posts() ) {
        $output .= '<ul class="fe-query-results-shortcode-output">';
        while ( $fe_query->have_posts() ) {
                $fe_query->the_post();
        
                $title = the_title();
                $link = the_permalink();
        
                $output .= "<li><a href=\"{$link}\">{$title}</a></li>";
           }
           $output .= '</ul>';
    } else {
        $output .= '<div class="fe-query-results-shortcode-output-none">No      results were found</div>';
    }
    
    wp_reset_postdata();

?>
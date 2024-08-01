<?php 
function jfh_products_show($atts, $content = null) {
    // ob_start();
    $a = shortcode_atts( array(
        'id' => '15',
        'catid' => '24',
        'parent' => '4462'
    ), $atts ); 
    $output = '';
    if(isset($_GET['cat_id'])){
        $cat_id = $_GET['cat_id'];
        if($cat_id){
            $filterID = $cat_id;
        }
        else{
            $filterID = $a['id'];
        }
    }
    else{
        $filterID = $a['id'];
    }
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;   
    if($a['parent']){
        $categoryBox = water_show_product_cats($a['parent']);
    }
    else{
        $categoryBox = '';
    }
//     $output .= '<div class="jfh-quick-access clearfix"><p>Quick access to related sections:</p>';
//     $output .= $categoryBox;
//     $output .= '</div>';
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
        'post_type' => 'product',
        'paged' => $paged,
        'posts_per_page'    => 9,
        'tax_query' => array(
            array(
                'taxonomy' => 'product_cat',
                'field'    => 'term_id',
                'terms'    => array($filterID),
                'operator' => 'IN'
                ),
            ),
    );
        $postslist = new WP_Query( $args );
		$output .= '<div class="water-pr-items">';
        if ( $postslist->have_posts() ) :
            while ( $postslist->have_posts() ) : $postslist->the_post(); 
                $dataSheet = get_post_meta(get_the_ID(), 'data_sheet', true);
                $thisPost = get_post(get_the_ID());
                if($dataSheet) {
                    $dataSheetLink = '<a target="_blank" href="' . $dataSheet . '" class="post-item-button orange"><svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.3408 4.61667L12.3743 1.70833C11.2523 0.608333 9.75633 0 8.16683 0H4.33333C1.98733 0 0.0833282 1.86667 0.0833282 4.16667V15.8333C0.0833282 18.1333 1.98733 20 4.33333 20H12.8333C15.1793 20 17.0833 18.1333 17.0833 15.8333V8.74167C17.0833 7.18333 16.4628 5.71667 15.3408 4.61667ZM14.1423 5.79167C14.4143 6.05833 14.6438 6.35 14.8308 6.66667H11.1418C10.6743 6.66667 10.2918 6.29167 10.2918 5.83333V2.21667C10.6148 2.4 10.9123 2.625 11.1843 2.89167L14.1508 5.8L14.1423 5.79167ZM15.3833 15.8333C15.3833 17.2083 14.2358 18.3333 12.8333 18.3333H4.33333C2.93083 18.3333 1.78333 17.2083 1.78333 15.8333V4.16667C1.78333 2.79167 2.93083 1.66667 4.33333 1.66667H8.16683C8.30283 1.66667 8.44733 1.66667 8.58333 1.68333V5.83333C8.58333 7.20833 9.73083 8.33333 11.1333 8.33333H15.3663C15.3833 8.46667 15.3833 8.6 15.3833 8.74167V15.8333ZM4.40983 10.8333H3.48333C3.01583 10.8333 2.63333 11.2083 2.63333 11.6667V15.3667C2.63333 15.6583 2.87133 15.8833 3.16033 15.8833C3.44933 15.8833 3.68733 15.65 3.68733 15.3667V14.35H4.40133C5.40433 14.35 6.22033 13.5583 6.22033 12.5917C6.22033 11.625 5.40433 10.8333 4.40133 10.8333H4.40983ZM3.70433 13.3083V11.875H4.41833C4.82633 11.875 5.17483 12.2 5.17483 12.5917C5.17483 12.9833 4.82633 13.3083 4.41833 13.3083H3.70433ZM14.5503 11.3583C14.5503 11.65 14.3123 11.875 14.0233 11.875H12.5868V12.825H13.6408C13.9383 12.825 14.1678 13.0583 14.1678 13.3417C14.1678 13.625 13.9298 13.8583 13.6408 13.8583H12.5868V15.3583C12.5868 15.65 12.3488 15.875 12.0598 15.875C11.7708 15.875 11.5328 15.6417 11.5328 15.3583V11.35C11.5328 11.0583 11.7708 10.8333 12.0598 10.8333H14.0233C14.3208 10.8333 14.5503 11.0667 14.5503 11.35V11.3583ZM8.65983 10.8417H7.73333C7.26583 10.8417 6.88333 11.2167 6.88333 11.675V15.375C6.88333 15.6667 7.12133 15.8417 7.41033 15.8417C7.69933 15.8417 8.65133 15.8417 8.65133 15.8417C9.65433 15.8417 10.4703 15.05 10.4703 14.0833V12.6C10.4703 11.6333 9.65433 10.8417 8.65133 10.8417H8.65983ZM9.41633 14.0833C9.41633 14.475 9.06783 14.8 8.65983 14.8H7.95433V11.8833H8.66833C9.07633 11.8833 9.42483 12.2083 9.42483 12.6V14.0833H9.41633Z" fill="#EF810A"/>
                    </svg>Datasheet</a>';
                }
                else{
                    $dataSheetLink = '';
                }
                $short_description = apply_filters( 'woocommerce_short_description', $thisPost->post_excerpt );
                $shortDescription = get_post_meta(get_the_ID(), 'smallDescription', true);
                $feat_image_url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
                $output .= '<div class="post-item">';
                $output .= '<figure class="image-wrapper clearfix"><a href="'.get_permalink().'"><img src="'.$feat_image_url.'" /></a></figure>';
                $output .= '<div class="post-content-wrapper">';
                $output .= '<h3><a href="'.get_permalink().'">' . get_the_title() . '</a></h3>';
                $output .= '<div class="short-desc">' . $short_description . '</div>';
                $output .= '<p><a href="' . get_permalink() . '" class="post-item-button">See More</a>'.$dataSheetLink;
                $output .= '</div></div>';

                endwhile;  
                $total_pages = $postslist->max_num_pages;
                $output .= '<div class="pagination clearfix">';
                $output.= paginate_links( array(
                    'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                    'total'        => $postslist->max_num_pages,
                    'current'      => max( 1, get_query_var( 'paged' ) ),
                    'format'       => '?paged=%#%',
                    'show_all'     => false,
                    'type'         => 'plain',
                    'end_size'     => 2,
                    'mid_size'     => 1,
                    'prev_next'    => true,
                    'prev_text'    => sprintf( '<i class="fi fi-rr-angle-small-left"><svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.20078 8.21031C3.10705 8.11734 3.03266 8.00674 2.98189 7.88488C2.93112 7.76302 2.90498 7.63232 2.90498 7.50031C2.90498 7.36829 2.93112 7.23759 2.98189 7.11573C3.03266 6.99387 3.10705 6.88327 3.20078 6.79031L7.79078 2.2103C7.88451 2.11734 7.95891 2.00674 8.00967 1.88488C8.06044 1.76302 8.08658 1.63232 8.08658 1.5003C8.08658 1.36829 8.06044 1.23759 8.00967 1.11573C7.95891 0.993868 7.88451 0.883267 7.79078 0.790304C7.60342 0.604053 7.34997 0.499512 7.08578 0.499512C6.8216 0.499512 6.56814 0.604053 6.38078 0.790304L1.79078 5.3803C1.22898 5.94281 0.913422 6.7053 0.913422 7.50031C0.913422 8.29531 1.22898 9.0578 1.79078 9.62031L6.38078 14.2103C6.56704 14.395 6.81844 14.4992 7.08078 14.5003C7.21239 14.5011 7.34285 14.4758 7.46469 14.4261C7.58653 14.3763 7.69734 14.303 7.79078 14.2103C7.88451 14.1173 7.95891 14.0067 8.00967 13.8849C8.06044 13.763 8.08658 13.6323 8.08658 13.5003C8.08658 13.3683 8.06044 13.2376 8.00967 13.1157C7.95891 12.9939 7.88451 12.8833 7.79078 12.7903L3.20078 8.21031Z" fill="#374957"/>
                    </svg>
                    </i> %1$s', __( '', 'text-domain' ) ),
                    'next_text'    => sprintf( '%1$s <i class="fi fi-rr-angle-small-right"><svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.20922 5.38006L2.61922 0.79006C2.43186 0.603809 2.17841 0.499268 1.91422 0.499268C1.65003 0.499268 1.39658 0.603809 1.20922 0.79006C1.11549 0.883023 1.0411 0.993624 0.990329 1.11548C0.93956 1.23734 0.913422 1.36805 0.913422 1.50006C0.913422 1.63207 0.93956 1.76278 0.990329 1.88464C1.0411 2.0065 1.11549 2.1171 1.20922 2.21006L5.80922 6.79006C5.90295 6.88302 5.97734 6.99363 6.02811 7.11548C6.07888 7.23734 6.10502 7.36805 6.10502 7.50006C6.10502 7.63207 6.07888 7.76278 6.02811 7.88464C5.97734 8.0065 5.90295 8.1171 5.80922 8.21006L1.20922 12.7901C1.02092 12.977 0.914602 13.2312 0.913664 13.4965C0.912726 13.7619 1.01724 14.0168 1.20422 14.2051C1.3912 14.3934 1.64532 14.4997 1.91068 14.5006C2.17605 14.5016 2.43092 14.397 2.61922 14.2101L7.20922 9.62006C7.77102 9.05756 8.08658 8.29506 8.08658 7.50006C8.08658 6.70506 7.77102 5.94256 7.20922 5.38006Z" fill="#374957"/>
                    </svg>
                    </i> ', __( '', 'text-domain' ) ),
                    'add_args'     => false,
                    'add_fragment' => '',
                ) );
                $output .= '</div>';
                ?>
            </div>
            <?php 
            endif;
	$output .= '</div>';
            wp_reset_postdata();
    $output .= '</div>';
    return $output;

}
add_shortcode('jfh-product-show', 'jfh_products_show');


function water_show_product_cats($pageParent){
    // $taxonomy     = 'product_cat';
    // $orderby      = 'name';
    // $show_count   = 0;      // 1 for yes, 0 for no
    // $pad_counts   = 0;      // 1 for yes, 0 for no
    // $hierarchical = 1;      // 1 for yes, 0 for no
    // $title        = '';
    // $empty        = 0;
    // $output = '';  

    // $args = array(
    //         'taxonomy'     => $taxonomy,
    //         'orderby'      => $orderby,
    //         'show_count'   => $show_count,
    //         'pad_counts'   => $pad_counts,
    //         'hierarchical' => $hierarchical,
    //         'title_li'     => $title,
    //         'order'        => 'ASC',
    //         'hide_empty'   => $empty,
    //         'parent' => $catID
    // );

    // $productCategories = get_categories( $args );
    $args = array(
        'numberposts' => 10,
        'post_type'   => 'page',
        'orderby' => 'post_title', 
        'order' => 'DESC',
        'post_parent' => $pageParent
      );
      
    $waterPages = get_posts( $args );
    $output .= '<ul>';
    (!isset($_GET['cat_id'])) ? $selectedCat = 'cat-selected' : $selectedCat = '';
     foreach($waterPages as $pageItem){
		if(get_the_ID() == $pageItem->ID){
            $selectedCat = 'cat-selected';
        }
        else{
            $selectedCat = '';
        }
        $output .= '<li class="'.$selectedCat.'"><a href="'.get_permalink($pageItem).'">'.get_the_title($pageItem).'</a></li>';
    }
    $output .= '<li class="'.$selectedCat.' sales-menu"><a href="'.home_url('/sales').'">Sales</a></li>';
    $output .= '</ul>';
    return $output;
}
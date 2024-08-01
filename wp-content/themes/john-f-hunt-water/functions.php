<?php 

add_action( 'wp_enqueue_scripts', 'my_enqueue_assets' ); 

function my_enqueue_assets() { 

    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css', array(), '0.1.2', 'all' ); 

} 

function my_added_social_icons($kkoptions) {
	global $themename, $shortname;
	
	$open_social_new_tab = array( "name" =>esc_html__( "Open Social URLs in New Tab", $themename ),
                   "id" => $shortname . "_show_in_newtab",
                   "type" => "checkbox",
                   "std" => "off",
                   "desc" =>esc_html__( "Set to ON to have social URLs open in new tab. ", $themename ) );
				   
	$replace_array_newtab = array ( $open_social_new_tab );
	
	$show_instagram_icon = array( "name" =>esc_html__( "Show Instagram Icon", $themename ),
                   "id" => $shortname . "_show_instagram_icon",
                   "type" => "checkbox2",
                   "std" => "on",
                   "desc" =>esc_html__( "Here you can choose to display the Instagram Icon on your header or footer. ", $themename ) );
	$show_pinterest_icon = array( "name" =>esc_html__( "Show Pinterest Icon", $themename ),
                   "id" => $shortname . "_show_pinterest_icon",
                   "type" => "checkbox2",
                   "std" => "on",
                   "desc" =>esc_html__( "Here you can choose to display the Pinterest Icon on your header or footer. ", $themename ) );
	$show_tumblr_icon = array( "name" =>esc_html__( "Show Tumblr Icon", $themename ),
                   "id" => $shortname . "_show_tumblr_icon",
                   "type" => "checkbox2",
                   "std" => "on",
                   "desc" =>esc_html__( "Here you can choose to display the Tumblr Icon on your header or footer. ", $themename ) );
	$show_dribbble_icon = array( "name" =>esc_html__( "Show Dribbble Icon", $themename ),
                   "id" => $shortname . "_show_dribbble_icon",
                   "type" => "checkbox2",
                   "std" => "on",
                   "desc" =>esc_html__( "Here you can choose to display the Dribbble Icon on your header or footer. ", $themename ) );
	$show_vimeo_icon = array( "name" =>esc_html__( "Show Vimeo Icon", $themename ),
                   "id" => $shortname . "_show_vimeo_icon",
                   "type" => "checkbox2",
                   "std" => "on",
                   "desc" =>esc_html__( "Here you can choose to display the Vimeo Icon on your header or footer. ", $themename ) );
	$show_linkedin_icon = array( "name" =>esc_html__( "Show LinkedIn Icon", $themename ),
                   "id" => $shortname . "_show_linkedin_icon",
                   "type" => "checkbox2",
                   "std" => "on",
                   "desc" =>esc_html__( "Here you can choose to display the LinkedIn Icon on your header or footer. ", $themename ) );
	$show_myspace_icon = array( "name" =>esc_html__( "Show MySpace Icon", $themename ),
                   "id" => $shortname . "_show_myspace_icon",
                   "type" => "checkbox2",
                   "std" => "on",
                   "desc" =>esc_html__( "Here you can choose to display the MySpace Icon on your header or footer. ", $themename ) );
	$show_skype_icon = array( "name" =>esc_html__( "Show Skype Icon", $themename ),
                   "id" => $shortname . "_show_skype_icon",
                   "type" => "checkbox2",
                   "std" => "on",
                   "desc" =>esc_html__( "Here you can choose to display the Skype Icon on your header or footer. ", $themename ) );
	$show_youtube_icon = array( "name" =>esc_html__( "Show Youtube Icon", $themename ),
                   "id" => $shortname . "_show_youtube_icon",
                   "type" => "checkbox2",
                   "std" => "on",
                   "desc" =>esc_html__( "Here you can choose to display the Youtube Icon on your header or footer. ", $themename ) );
	$show_flickr_icon = array( "name" =>esc_html__( "Show Flickr Icon", $themename ),
                   "id" => $shortname . "_show_flickr_icon",
                   "type" => "checkbox2",
                   "std" => "on",
                   "desc" =>esc_html__( "Here you can choose to display the Flickr Icon on your header or footer. ", $themename ) );
				   
	$repl_array_opt = array( $show_instagram_icon,
							$show_pinterest_icon,
							$show_tumblr_icon,
							$show_dribbble_icon,
							$show_vimeo_icon,
							$show_linkedin_icon,
							$show_myspace_icon,
							$show_skype_icon,
							$show_youtube_icon,
							$show_flickr_icon,
							);
	
	$show_instagram_url =array( "name" =>esc_html__( "Instagram Profile Url", $themename ),
                   "id" => $shortname . "_instagram_url",
                   "std" => "#",
                   "type" => "text",
                   "validation_type" => "url",
				   "desc" =>esc_html__( "Enter the URL of your Instagram Profile. ", $themename ) );
	$show_pinterest_url =array( "name" =>esc_html__( "Pinterest Profile Url", $themename ),
                   "id" => $shortname . "_pinterest_url",
                   "std" => "#",
                   "type" => "text",
                   "validation_type" => "url",
				   "desc" =>esc_html__( "Enter the URL of your Pinterest Profile. ", $themename ) );
	$show_tumblr_url =array( "name" =>esc_html__( "Tumblr Profile Url", $themename ),
                   "id" => $shortname . "_tumblr_url",
                   "std" => "#",
                   "type" => "text",
                   "validation_type" => "url",
				   "desc" =>esc_html__( "Enter the URL of your Tumblr Profile. ", $themename ) );
	$show_dribble_url =array( "name" =>esc_html__( "Dribbble Profile Url", $themename ),
                   "id" => $shortname . "_dribble_url",
                   "std" => "#",
                   "type" => "text",
                   "validation_type" => "url",
				   "desc" =>esc_html__( "Enter the URL of your Dribbble Profile. ", $themename ) );
	$show_vimeo_url =array( "name" =>esc_html__( "Vimeo Profile Url", $themename ),
                   "id" => $shortname . "_vimeo_url",
                   "std" => "#",
                   "type" => "text",
                   "validation_type" => "url",
				   "desc" =>esc_html__( "Enter the URL of your Vimeo Profile. ", $themename ) );
	$show_linkedin_url =array( "name" =>esc_html__( "LinkedIn Profile Url", $themename ),
                   "id" => $shortname . "_linkedin_url",
                   "std" => "#",
                   "type" => "text",
                   "validation_type" => "url",
				   "desc" =>esc_html__( "Enter the URL of your LinkedIn Profile. ", $themename ) );
	$show_myspace_url =array( "name" =>esc_html__( "MySpace Profile Url", $themename ),
                   "id" => $shortname . "_mysapce_url",
                   "std" => "#",
                   "type" => "text",
                   "validation_type" => "url",
				   "desc" =>esc_html__( "Enter the URL of your MySpace Profile. ", $themename ) );
	$show_skype_url =array( "name" =>esc_html__( "Skype Profile Url", $themename ),
                   "id" => $shortname . "_skype_url",
                   "std" => "#",
                   "type" => "text",
                   "validation_type" => "url",
				   "desc" =>esc_html__( "Enter the URL of your Skype Profile. ", $themename ) );
	$show_youtube_url =array( "name" =>esc_html__( "Youtube Profile Url", $themename ),
                   "id" => $shortname . "_youtube_url",
                   "std" => "#",
                   "type" => "text",
                   "validation_type" => "url",
				   "desc" =>esc_html__( "Enter the URL of your Youtube Profile. ", $themename ) );
	$show_flickr_url =array( "name" =>esc_html__( "Flickr Profile Url", $themename ),
                   "id" => $shortname . "_flickr_url",
                   "std" => "#",
                   "type" => "text",
                   "validation_type" => "url",
				   "desc" =>esc_html__( "Enter the URL of your Flickr Profile. ", $themename ) );
				   
	$repl_array_url = array( $show_instagram_url,
							$show_pinterest_url,
							$show_tumblr_url,
							$show_dribble_url,
							$show_vimeo_url,
							$show_linkedin_url,
							$show_myspace_url,
							$show_skype_url,
							$show_youtube_url,
							$show_flickr_url,
							);


	$srch_key = array_column($kkoptions, 'id');
	
	$key = array_search('divi_show_facebook_icon', $srch_key);
	array_splice($kkoptions, $key + 6, 0, $replace_array_newtab);
	
	$key = array_search('divi_show_google_icon', $srch_key);
	array_splice($kkoptions, $key + 8, 0, $repl_array_opt);

	$key = array_search('divi_rss_url', $srch_key);
	array_splice($kkoptions, $key + 17, 0, $repl_array_url);
	
	//print_r($kkoptions);

	return $kkoptions;
}
add_filter('et_epanel_layout_data', 'my_added_social_icons', 99);

define( 'DDPL_DOMAIN', 'my-domain' ); // translation domain
require_once( 'vendor/divi-disable-premade-layouts/divi-disable-premade-layouts.php' );

function bhc_customize_register($wp_customize)
{
    $wp_customize->add_setting("bhc_hamburger_color",[
        'default' => et_builder_accent_color(),
        'transport' => 'refresh',
    ]);
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'bhc_hamburger_color', array(
        'label' => __('Hamburger Color', 'bloody-hamburger-color'),
        'section' => 'et_divi_mobile_menu',
        'settings' => 'bhc_hamburger_color',
    )));
}
add_action('customize_register', 'bhc_customize_register');
function bhc_customize_css()
{
    ?>
         <style type="text/css" id="bloody-hamburger-color">
             .mobile_menu_bar:before { color: <?php echo get_theme_mod('bhc_hamburger_color', et_builder_accent_color()); ?> !important; }
         </style>
    <?php
}
add_action('wp_head', 'bhc_customize_css');


function jfh_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
  }
add_action( 'after_setup_theme', 'jfh_add_woocommerce_support' );
get_template_part('includes/productsWidget');
get_template_part('includes/adminPanelPostPage');
get_template_part('includes/product_show');
get_template_part('includes/product_cta');
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

function product_specific_ui($uiName, $uiParameter, $titleColor){
    ?>
    <div class="product-specification-wrapper clearfix <?php echo($titleColor);?>">
        <h2><?php _e($uiName, 'water');?></h2>
        <div class="specification-content clearfix">
            <?php echo($uiParameter);?>
        </div>
    </div>
    <?php 
}

add_shortcode( 'techvertu-get-woo-buttons', 'techvertu_woo_buttons' );
function techvertu_woo_buttons( $atts ) {
	$dataSheet = get_post_meta(get_the_ID(), 'data_sheet', true);
    ($dataSheet) ? $centered = '' : $centered = 'text-align:center;width:100%;';
    ($dataSheet) ? $fullWidth = '' : $fullWidth = 'width:100%;';
    $output .= ' <p style='.$centered.'>
        <a style="'.$fullWidth.'" href="'.home_url('/contact-us').'" class="post-item-button">
            <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.8955 0.836037C10.8955 0.61466 10.9835 0.40235 11.14 0.245812C11.2965 0.0892748 11.5089 0.001333 11.7302 0.001333C13.9432 0.00376332 16.0649 0.883962 17.6297 2.44881C19.1945 4.01366 20.0747 6.13535 20.0771 8.34838C20.0771 8.56975 19.9892 8.78207 19.8327 8.9386C19.6761 9.09514 19.4638 9.18308 19.2425 9.18308C19.0211 9.18308 18.8088 9.09514 18.6522 8.9386C18.4957 8.78207 18.4078 8.56975 18.4078 8.34838C18.4058 6.57797 17.7016 4.88064 16.4498 3.62877C15.1979 2.3769 13.5006 1.67273 11.7302 1.67074C11.5089 1.67074 11.2965 1.5828 11.14 1.42626C10.9835 1.26973 10.8955 1.05741 10.8955 0.836037ZM11.7302 5.00956C12.6157 5.00956 13.465 5.36133 14.0911 5.98748C14.7172 6.61363 15.069 7.46287 15.069 8.34838C15.069 8.56975 15.1569 8.78207 15.3135 8.9386C15.47 9.09514 15.6823 9.18308 15.9037 9.18308C16.1251 9.18308 16.3374 9.09514 16.4939 8.9386C16.6504 8.78207 16.7384 8.56975 16.7384 8.34838C16.7371 7.02052 16.209 5.74743 15.2701 4.80849C14.3311 3.86955 13.0581 3.34148 11.7302 3.34015C11.5089 3.34015 11.2965 3.42809 11.14 3.58463C10.9835 3.74117 10.8955 3.95348 10.8955 4.17486C10.8955 4.39623 10.9835 4.60854 11.14 4.76508C11.2965 4.92162 11.5089 5.00956 11.7302 5.00956ZM19.3201 13.9735C19.8038 14.4585 20.0754 15.1156 20.0754 15.8006C20.0754 16.4856 19.8038 17.1427 19.3201 17.6278L18.5605 18.5034C11.7244 25.0483 -4.91104 8.41682 1.53279 1.55889L2.49268 0.724187C2.97828 0.253979 3.62948 -0.00613838 4.30539 0.000110022C4.9813 0.00635842 5.62758 0.27847 6.1044 0.757575C6.13027 0.783451 7.67696 2.79258 7.67696 2.79258C8.1359 3.27473 8.39138 3.9152 8.39029 4.58086C8.3892 5.24651 8.13163 5.88614 7.67112 6.36679L6.70454 7.58212C7.23945 8.88185 8.02591 10.0631 9.01873 11.0579C10.0116 12.0527 11.1912 12.8416 12.4898 13.3791L13.7126 12.4067C14.1933 11.9465 14.8328 11.6893 15.4983 11.6883C16.1637 11.6874 16.8039 11.9429 17.2859 12.4017C17.2859 12.4017 19.2942 13.9476 19.3201 13.9735ZM18.1715 15.1871C18.1715 15.1871 16.1741 13.6504 16.1483 13.6245C15.9763 13.454 15.7439 13.3584 15.5018 13.3584C15.2596 13.3584 15.0273 13.454 14.8553 13.6245C14.8328 13.6479 13.1492 14.9893 13.1492 14.9893C13.0357 15.0796 12.9007 15.1388 12.7574 15.161C12.6141 15.1833 12.4675 15.1678 12.332 15.1162C10.6497 14.4898 9.12159 13.5091 7.85127 12.2407C6.58095 10.9722 5.59808 9.44554 4.96922 7.76408C4.91346 7.62674 4.89528 7.47702 4.91655 7.33032C4.93782 7.18362 4.99778 7.04523 5.09025 6.92938C5.09025 6.92938 6.4316 5.24495 6.45413 5.22324C6.62464 5.05128 6.7203 4.81893 6.7203 4.57677C6.7203 4.3346 6.62464 4.10225 6.45413 3.93029C6.42826 3.90525 4.89159 1.90613 4.89159 1.90613C4.71706 1.74963 4.48927 1.66581 4.25493 1.67187C4.02058 1.67792 3.79743 1.77338 3.6312 1.93868L2.67131 2.77339C-2.03803 8.43602 12.3779 22.0526 17.3402 17.3632L18.1006 16.4867C18.2788 16.3217 18.3858 16.0938 18.3991 15.8513C18.4123 15.6088 18.3307 15.3706 18.1715 15.1871Z" fill="white"/>
            </svg>
            ENQUIRE TODAY
        </a>
    ';
    if($dataSheet) {
        $output .='
            <a href="'.$dataSheet.'" class="post-item-button orange" target="_blank">
                <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.3408 4.61667L12.3743 1.70833C11.2523 0.608333 9.75633 0 8.16683 0H4.33333C1.98733 0 0.0833282 1.86667 0.0833282 4.16667V15.8333C0.0833282 18.1333 1.98733 20 4.33333 20H12.8333C15.1793 20 17.0833 18.1333 17.0833 15.8333V8.74167C17.0833 7.18333 16.4628 5.71667 15.3408 4.61667ZM14.1423 5.79167C14.4143 6.05833 14.6438 6.35 14.8308 6.66667H11.1418C10.6743 6.66667 10.2918 6.29167 10.2918 5.83333V2.21667C10.6148 2.4 10.9123 2.625 11.1843 2.89167L14.1508 5.8L14.1423 5.79167ZM15.3833 15.8333C15.3833 17.2083 14.2358 18.3333 12.8333 18.3333H4.33333C2.93083 18.3333 1.78333 17.2083 1.78333 15.8333V4.16667C1.78333 2.79167 2.93083 1.66667 4.33333 1.66667H8.16683C8.30283 1.66667 8.44733 1.66667 8.58333 1.68333V5.83333C8.58333 7.20833 9.73083 8.33333 11.1333 8.33333H15.3663C15.3833 8.46667 15.3833 8.6 15.3833 8.74167V15.8333ZM4.40983 10.8333H3.48333C3.01583 10.8333 2.63333 11.2083 2.63333 11.6667V15.3667C2.63333 15.6583 2.87133 15.8833 3.16033 15.8833C3.44933 15.8833 3.68733 15.65 3.68733 15.3667V14.35H4.40133C5.40433 14.35 6.22033 13.5583 6.22033 12.5917C6.22033 11.625 5.40433 10.8333 4.40133 10.8333H4.40983ZM3.70433 13.3083V11.875H4.41833C4.82633 11.875 5.17483 12.2 5.17483 12.5917C5.17483 12.9833 4.82633 13.3083 4.41833 13.3083H3.70433ZM14.5503 11.3583C14.5503 11.65 14.3123 11.875 14.0233 11.875H12.5868V12.825H13.6408C13.9383 12.825 14.1678 13.0583 14.1678 13.3417C14.1678 13.625 13.9298 13.8583 13.6408 13.8583H12.5868V15.3583C12.5868 15.65 12.3488 15.875 12.0598 15.875C11.7708 15.875 11.5328 15.6417 11.5328 15.3583V11.35C11.5328 11.0583 11.7708 10.8333 12.0598 10.8333H14.0233C14.3208 10.8333 14.5503 11.0667 14.5503 11.35V11.3583ZM8.65983 10.8417H7.73333C7.26583 10.8417 6.88333 11.2167 6.88333 11.675V15.375C6.88333 15.6667 7.12133 15.8417 7.41033 15.8417C7.69933 15.8417 8.65133 15.8417 8.65133 15.8417C9.65433 15.8417 10.4703 15.05 10.4703 14.0833V12.6C10.4703 11.6333 9.65433 10.8417 8.65133 10.8417H8.65983ZM9.41633 14.0833C9.41633 14.475 9.06783 14.8 8.65983 14.8H7.95433V11.8833H8.66833C9.07633 11.8833 9.42483 12.2083 9.42483 12.6V14.0833H9.41633Z" fill="#EF810A"></path>
                </svg>
                Download Datasheet 
            </a>';
    }
    $output .= '</p>';
    return $output;
}

?>

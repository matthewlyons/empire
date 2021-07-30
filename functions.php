<?php

add_action('after_setup_theme', 'cleanup');
 
function cleanup() {
  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wp_generator');
  remove_action('wp_head', 'feed_links', 2);
  remove_action('wp_head', 'feed_links_extra', 3);
  remove_action('wp_head', 'index_rel_link');
  remove_action('wp_head', 'wlwmanifest_link');
  remove_action('wp_head', 'start_post_rel_link', 10, 0);
  remove_action('wp_head', 'parent_post_rel_link', 10, 0);
  remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
  remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
  remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('wp_head', 'rel_canonical');
  remove_action('wp_head', 'rel_alternate');
  remove_action('wp_head', 'wp_oembed_add_discovery_links');
  remove_action('wp_head', 'wp_oembed_add_host_js');
  remove_action('wp_head', 'rest_output_link_wp_head');
   
  remove_action('rest_api_init', 'wp_oembed_register_route');
  remove_action('wp_print_styles', 'print_emoji_styles');
   
  remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
  remove_filter('pre_oembed_result', 'wp_filter_pre_oembed_result', 10);

   
  add_filter('embed_oembed_discover', '__return_false');
  add_filter('show_admin_bar', '__return_false');
}

function scripts(){
  wp_enqueue_style('resetCSS', get_stylesheet_directory_uri(). '/reset.css');
  wp_enqueue_style('styleCSS', get_stylesheet_directory_uri(). '/style.css');
}

function smartwp_remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
} 
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );

add_action('wp_enqueue_scripts', 'scripts');

wp_enqueue_script( 'maps', get_template_directory_uri() . '/js/maps.js', array(), true );

add_theme_support('editor-styles');
add_editor_style('style.css');

add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );

add_action('admin_head', 'admin_styles');

register_nav_menus( array(  
  'primary' => __( 'Primary Navigation' ),  
  'secondary' => __('Secondary Navigation')  
  ) ); 

function admin_styles() {
    echo '<style>
    .wp-block {
      max-width: none;
  }
    </style>';
}

function wp_get_menu_array($current_menu) {
    $array_menu = wp_get_nav_menu_items($current_menu);
    $menu = array();
    foreach ($array_menu as $m) {
        if (empty($m->menu_item_parent)) {
            $menu[$m->ID] = array();
            $menu[$m->ID]['ID']          =   $m->ID;
            $menu[$m->ID]['title']       =   $m->title;
            $menu[$m->ID]['url']         =   $m->url;
            $menu[$m->ID]['children']    =   array();
        }
    }
    $submenu = array();
    foreach ($array_menu as $m) {
        if ($m->menu_item_parent) {
            $submenu[$m->ID] = array();
            $submenu[$m->ID]['ID']       =   $m->ID;
            $submenu[$m->ID]['title']    =   $m->title;
            $submenu[$m->ID]['url']      =   $m->url;
            $menu[$m->menu_item_parent]['children'][$m->ID] = $submenu[$m->ID];
        }
    }
    return $menu;
}


/**
* Create Logo Setting and Upload Control
*/
function your_theme_new_customizer_settings($wp_customize) {
        // add a setting for the site logo
    $wp_customize->add_setting('your_theme_logo');
        // Add a control to upload the logo
        $wp_customize->add_control( new WP_Customize_Image_Control( 
            $wp_customize, 'your_theme_logo',
            array(
                'label' => 'Upload Logo',
                'section' => 'title_tagline',
                'settings' => 'your_theme_logo',
            ) 
        ) 
    );
}

add_action('customize_register', 'your_theme_new_customizer_settings');

function custom_block_categories( $categories, $post ) {
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'layout-blocks',
                'title' => __( 'Layout', 'layout-blocks' ),
            ),
        ),
        array(
            array(
                'slug' => 'content-blocks',
                'title' => __( 'Content', 'content-blocks' ),
            ),
        )
    );
}
add_filter( 'block_categories', 'custom_block_categories', 10, 2);
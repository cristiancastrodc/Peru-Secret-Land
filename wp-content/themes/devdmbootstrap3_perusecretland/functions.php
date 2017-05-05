<?php
/**
 * Enqueue custom CSS files and Scripts
 */
if ( ! function_exists( 'perusecretland_css_js' ) ) {
  // Load theme's JavaScript and CSS sources.
  function perusecretland_css_js() {
    wp_enqueue_style( 'perusecretland-fonts', get_stylesheet_directory_uri() . '/css/fonts.css');
    wp_enqueue_style( 'perusecretland-responsive', get_stylesheet_directory_uri() . '/css/responsive.css');
    wp_enqueue_script( 'perusecretland-easing', get_stylesheet_directory_uri() . '/js/jquery.easing.1.3.js', array('jquery'));
    wp_enqueue_script( 'perusecretland-scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array('jquery'));
  }
} // endif function_exists( 'perusecretland_css_js' ).
add_action( 'wp_enqueue_scripts', 'perusecretland_css_js' );

/**
 * Add custom widgets areas
 */
function perusecretland_widgets_init() {
  // Top widgets
  $args = array(
    'name'          => 'Top Widgets',
    'id'            => 'top-widgets',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
  );
  register_sidebar( $args );
  // Floating sidebar
  $args = array(
    'name'          => 'Floating Sidebar',
    'id'            => 'floating-sidebar',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
  );
  register_sidebar( $args );
}
add_action('widgets_init', 'perusecretland_widgets_init');

// Agregar un menú
register_nav_menus(
  array(
    'pages_menu' => 'Pages Menu',
  )
);

function header_background() {
  if (is_category()) {
    echo "style='background-image:url(" . z_taxonomy_image_url() . ")'";
  }
  elseif (is_single()) {
    $cats = get_the_category();
    echo "style='background-image:url(" . z_taxonomy_image_url($cats[0]->term_id) . ")'";
  }
}

function post_cat_title() {
  $cats = get_the_category();
  echo $cats[0]->name;
}
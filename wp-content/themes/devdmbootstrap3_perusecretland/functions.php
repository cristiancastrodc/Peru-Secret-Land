<?php
/**
 * Enqueue custom CSS files and Scripts
 */
if ( ! function_exists( 'perusecretland_css_js' ) ) {
  // Load theme's JavaScript and CSS sources.
  function perusecretland_css_js() {
    wp_enqueue_style( 'perusecretland-fonts', get_stylesheet_directory_uri() . '/css/fonts.css');
    wp_enqueue_style( 'perusecretland-responsive', get_stylesheet_directory_uri() . '/css/responsive.css');
    wp_enqueue_style( 'jquery-chosen', get_stylesheet_directory_uri() . '/css/chosen.min.css');
    wp_enqueue_script( 'perusecretland-easing', get_stylesheet_directory_uri() . '/js/jquery.easing.1.3.js', array('jquery'));
    wp_enqueue_script( 'jquery-chosen', get_stylesheet_directory_uri() . '/js/chosen.jquery.min.js', array('jquery'));
    wp_enqueue_script( 'perusecretland-scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array('jquery'));
    wp_enqueue_script( 'perusecretland-footer-scripts', get_stylesheet_directory_uri() . '/js/footer.scripts.js', array('jquery', 'jquery-chosen'), false, true );
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

/*
 * Return al posts in Categories page.
 */
add_filter('pre_get_posts', 'posts_in_category');
function posts_in_category($query){
  if ($query->is_category) {
    $query->set('posts_per_archive_page', -1);
  }
}

/*
 * Restrict Simple History to only Admin users.
 */
add_filter("simple_history/view_history_capability", function($capability) {
  $capability = "manage_options";
  return $capability;
});


/*
 * Listado de tours para formulario de personaliza tu tour
 */
add_action( 'wpcf7_init', 'custom_views_post_title' );
function custom_views_post_title() {
  wpcf7_add_shortcode( 'custom_views_post_title', 'custom_views_post_title_shortcode_handler' );
}
function custom_views_post_title_shortcode_handler( $tag ) {
  global $post;

  /* Aventura */
  $args = array( 'post_type' => 'post', 'posts_per_page' => -1, 'category' => 13 );
  $posts_aventura = get_posts( $args );

  $output = '<div class="col-sm-4">';
  $output .= '<h3>' . __('Adventure Tours', 'perusecretland') . '</h3>';
  $output .= '<select name="toursaventura[]" class="chosen-select form-control wpcf7-select" multiple="multiple" data-placeholder="' . __('Choose some tours', 'perusecretland') . '">';

  foreach ( $posts_aventura as $post ) : setup_postdata($post);
    $title = get_the_title();
    $output .= '<option value="' . $title . '">'. $title .' </option>';
  endforeach;

  $output .= "</select></div>";
  /* Aventura */

  /* Tradicional */
  $args = array( 'post_type' => 'post', 'posts_per_page' => -1, 'category' => 19 );
  $posts_aventura = get_posts( $args );

  $output .= '<div class="col-sm-4">';
  $output .= '<h3>' . __('Traditional Tours', 'perusecretland') . '</h3>';
  $output .= '<select name="tourstradicional[]" class="chosen-select form-control wpcf7-select" multiple="multiple" data-placeholder="' . __('Choose some tours', 'perusecretland') . '">';

  foreach ( $posts_aventura as $post ) : setup_postdata($post);
    $title = get_the_title();
    $output .= '<option value="' . $title . '">'. $title .' </option>';
  endforeach;

  $output .= "</select></div>";
  /* Tradicional */

  /* Vivencial */
  $args = array( 'post_type' => 'post', 'posts_per_page' => -1, 'category' => 25 );
  $posts_aventura = get_posts( $args );

  $output .= '<div class="col-sm-4">';
  $output .= '<h3>' . __('Experiential Tours', 'perusecretland') . '</h3>';
  $output .= '<select name="toursvivencial[]" class="chosen-select form-control wpcf7-select" multiple="multiple" data-placeholder="' . __('Choose some tours', 'perusecretland') . '">';

  foreach ( $posts_aventura as $post ) : setup_postdata($post);
    $title = get_the_title();
    $output .= '<option value="' . $title . '">'. $title .' </option>';
  endforeach;

  $output .= "</select></div>";
  /* Vivencial */

  return $output;
}

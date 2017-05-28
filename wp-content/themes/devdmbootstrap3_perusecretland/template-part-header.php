<nav class="navbar navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header visible-xs-block">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar" aria-expanded="false">
        <span class="sr-only"><?php _e( 'Toggle navigation', 'perusecretland' ); ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="Peru Secret Land Logo" class="img-responsive"></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="main-navbar">
      <?php if ( is_active_sidebar( 'top-widgets' ) ) : ?>
        <?php dynamic_sidebar( 'top-widgets' ); ?>
      <?php endif; ?>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="Peru Secret Land Logo" class="img-responsive center-block visible-sm-block"></a>
      <?php if (is_front_page()): ?>
        <?php
          wp_nav_menu( array(
            'theme_location'  => 'main_menu',
            'menu_class'   => 'nav navbar-nav nav-menu',
          ));
        ?>
      <?php else: ?>
        <?php
          wp_nav_menu( array(
            'theme_location'  => 'pages_menu',
            'menu_class'   => 'nav navbar-nav nav-menu',
          ));
        ?>
      <?php endif ?>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<header class="parent" <?php header_background(); ?>>
  <div class="container child">
    <?php if (is_front_page() || is_page()): ?>
      <div class="row">
        <div class="col-sm-12 text-center">
          <p class="lh-1 ff-athelas c-white"><?php _e( 'Customize your trip.' , 'perusecretland' ); ?> <span class="ff-adleit c-yellow fs-22"><?php _e( 'Make it unique.', 'perusecretland' ); ?></span></p>
          <p class="lh-1 text-uppercase ff-helvetica-condensed c-gray fs-40 ts mb-0"><?php _e( 'Keep moving', 'perusecretland' ); ?></p>
          <p class="lh-1 text-uppercase ff-helvetica c-gray fs-60 ts"><?php _e( 'Feel alive', 'perusecretland' ); ?></p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-grises.png" alt="Peru Secret Land Logo Gray" class=" img-responsive center-block">
        </div>
      </div>
    <?php elseif(is_category()): ?>
      <div class="row">
        <div class="col-sm-12 text-center">
          <p class="ff-adleit c-yellow fs-22"><?php _e( 'What experience do you wish?', 'perusecretland' ); ?></p>
          <p class="lh-1 text-uppercase ff-helvetica-condensed fs-35 fs-sm-80 mb-0 c-white ls-10"><?php single_cat_title(); ?></p>
        </div>
      </div>
    <?php elseif (is_single()): ?>
      <div class="row">
        <div class="col-sm-12 text-center">
          <p class="ff-adleit c-yellow fs-22"><?php _e( 'What experience do you wish?', 'perusecretland' ); ?></p>
          <p class="lh-1 text-uppercase ff-helvetica-condensed fs-35 fs-sm-80 mb-0 c-white ls-10"><?php post_cat_title(); ?></p>
        </div>
      </div>
    <?php endif ?>
  </div>
</header>
<?php if ( is_active_sidebar( 'floating-sidebar' ) ) : ?>
  <div id="floating-sidebar">
    <?php dynamic_sidebar( 'floating-sidebar' ); ?>
  </div>
<?php endif; ?>

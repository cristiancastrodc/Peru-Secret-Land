<?php get_header(); ?>

<?php get_template_part('template-part', 'header'); ?>

<!-- Quienes Somos -->
<?php query_posts( array('page_id' => pll_get_post(6) ) ); ?>
<?php the_post(); ?>
<section id="quienes-somos">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-grises.png" alt="Peru Secret Land Logo Gray" class=" img-responsive center-block">
      </div>
    </div>
  </div>
</section>
<!--/ Quienes Somos -->
<!-- Nuestro Equipo -->
<?php query_posts( array('page_id' => pll_get_post(19) ) ); ?>
<?php the_post(); ?>
<section id="nuestro-equipo" class="c-white">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h1><?php the_title(); ?></h1>
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-responsive center-block">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</section>
<!--/ Nuestro Equipo -->
<!-- Tours -->
<section id="tours" class="c-white">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h1 class="mt-60 mb-60"><?php _e( 'Tours', 'perusecretland' ); ?></h1>
        <div class="tour-link-wrapper"><a href="<?php echo get_term_link(pll_get_term(13)); ?>" class="tour-link"><?php _e( 'Adventure', 'perusecretland' ); ?></a></div>
        <div class="tour-link-wrapper"><a href="<?php echo get_term_link(pll_get_term(19)); ?>" class="tour-link"><?php _e( 'Traditional', 'perusecretland' ); ?></a></div>
        <div class="tour-link-wrapper last"><a href="<?php echo get_term_link(pll_get_term(25)); ?>" class="tour-link"><?php _e( 'Experiential', 'perusecretland' ); ?></a></div>
      </div>
    </div>
  </div>
</section>
<!--/ Tours -->
<!-- Galería -->
<?php query_posts( array('page_id' => pll_get_post(24) ) ); ?>
<?php the_post(); ?>
  <section id="galeria">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <div class="year">
            <h2><?php the_field('anio'); ?></h2>
          </div>
          <h1 class="mb-60"><?php _e('Gallery', 'perusecretland'); ?></h1>
          <div class="gallery-images">
            <div class="row">
              <div class="col-sm-6">
                <?php if (get_field('primera_imagen')): ?>
                  <img src="<?php the_field('primera_imagen'); ?>" alt="" class="img-responsive center-block">
                <?php endif ?>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-2 col-sm-offset-4">
                <div class="mt-60">
                  <?php if (get_field('segunda_imagen')): ?>
                    <img src="<?php the_field('segunda_imagen'); ?>" alt="" class="img-responsive center-block">
                  <?php endif ?>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="row">
                  <div class="col-sm-12">
                    <?php if (get_field('tercera_imagen')): ?>
                      <img src="<?php the_field('tercera_imagen'); ?>" alt="" class="img-responsive center-block">
                    <?php endif ?>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-3">
                    <div class="mt-30">
                      <?php if (get_field('cuarta_imagen')): ?>
                        <img src="<?php the_field('cuarta_imagen'); ?>" alt="" class="img-responsive center-block">
                      <?php endif ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="gallery-view-more-wrapper">
            <a href="<?php echo get_permalink(pll_get_post(78)); ?>" class="gallery-view-more"><?php _e( 'View More', 'perusecretland' ); ?><br><small><?php _e( 'Image Gallery', 'perusecretland' ); ?></small></a>
          </div>
        </div>
      </div>
    </div>
  </section>
<!--/ Galería -->

<?php get_template_part('template-part', 'footer'); ?>

<?php get_footer(); ?>

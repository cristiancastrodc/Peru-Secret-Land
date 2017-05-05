<?php get_header(); ?>

<?php get_template_part('template-part', 'header'); ?>

<section id="main-content">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 ff-helvetica-condensed fs-18">
        <h1 class="text-center mb-60"><?php _e( 'Tours', 'perusecretland' ); ?></h1>
        <?php if (have_posts()): the_post(); ?>
          <?php if (is_single()): ?>
            <div class="post-gallery-container">
            <?php get_the_post_thumbnail_url( null, 'post-thumbnail' ); ?>
              <img src="<?php echo get_the_post_thumbnail_url('', 'full'); ?>" alt="" class="img-responsive center-block">
            </div>
            <h2 class="text-uppercase text-center"><?php the_title(); ?></h2>
            <?php the_content(); ?>
          <?php endif ?>
        <?php endif ?>
      </div>
    </div>
  </div>
</section>


<?php get_template_part('template-part', 'footer'); ?>

<?php get_footer(); ?>

<?php get_header(); ?>

<?php get_template_part('template-part', 'header'); ?>

<section id="tours-list">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h1 class="text-center mb-60"><?php _e( 'Tours', 'perusecretland' ); ?></h1>
        <?php if (have_posts()): ?>
          <?php // The Loop
          while ( have_posts() ) : the_post(); ?>
            <div class="row table-row-sm pb-15 pb-md-0">
              <?php $is_odd = ($wp_query->current_post % 2 == 0); ?>
              <div class="col-sm-6 pl-0 pr-0 col-sm-table-middle <?php if ($is_odd) echo "col-sm-push-6"; ?>">
                <?php echo get_the_post_thumbnail('', 'full'); ?>
              </div>
              <div class="col-sm-6 pl-0 pr-0 col-sm-table-middle <?php if ($is_odd) echo "col-sm-pull-6"; ?>">
                <div class="text-center excerpt-wrapper">
                  <h2 class="text-uppercase ff-helvetica-condensed"><a class="c-gray" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                  <p><?php echo get_the_excerpt(); ?></p>
                  <div class="text-right"><a href="<?php the_permalink(); ?>" class="read-more-link ff-helvetica-condensed"><?php _e('[Read more]', 'perusecretland') ?></a></div>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif ?>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('template-part', 'footer'); ?>

<?php get_footer(); ?>

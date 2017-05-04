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
            <div class="row table-row-sm">
              <div class="col-sm-6 pl-0 pr-0 col-sm-table-middle">
                <?php if ($wp_query->current_post % 2 == 0): ?>
                  <?php echo get_the_post_thumbnail('', 'full'); ?>
                <?php else: ?>
                  <div class="text-center excerpt-wrapper">
                    <h2 class="text-uppercase ff-helvetica-condensed"><a class="c-gray" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                    <p><?php echo get_the_excerpt(); ?></p>
                    <div class="text-right"><a href="<?php the_permalink(); ?>" class="read-more-link ff-helvetica-condensed"><?php _e('[Read more]', 'perusecretland') ?></a></div>
                  </div>
                <?php endif ?>
              </div>
              <div class="col-sm-6 pl-0 pr-0 col-sm-table-middle">
                <?php if ($wp_query->current_post % 2 == 0): ?>
                  <div class="text-center excerpt-wrapper">
                    <h2 class="text-uppercase ff-helvetica-condensed"><a class="c-gray" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                    <p><?php echo get_the_excerpt(); ?></p>
                    <div class="text-right"><a href="<?php the_permalink(); ?>" class="read-more-link ff-helvetica-condensed"><?php _e('[Read more]', 'perusecretland') ?></a></div>
                  </div>
                <?php else: ?>
                  <?php echo get_the_post_thumbnail('', 'full'); ?>
                <?php endif ?>
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

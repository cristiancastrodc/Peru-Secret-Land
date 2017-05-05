<?php get_header(); ?>

<?php get_template_part('template-part', 'header'); ?>

<section id="main-content">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 ff-helvetica-condensed fs-18">
        <?php if (have_posts()): the_post(); ?>
          <h1 class="text-center mb-60"><?php the_title(); ?></h1>
          <?php the_content(); ?>
        <?php endif ?>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('template-part', 'footer'); ?>

<?php get_footer(); ?>

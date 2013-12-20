<?php get_header(); ?>

<div class="row">
  <div class="large-8 columns">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <h1 class="title"><?php the_title(); ?></h1>
      <?php the_content(); ?>

    <?php endwhile; else: ?>
      <p><?php _e('Sorry, this page does not exist.'); ?></p>
    <?php endif; ?>

  </div><!-- END large-8 -->

  <div class="large-4 columns">
    <?php get_sidebar(); ?>
  </div><!-- END large-4 (sidebar) -->

</div><!-- END ROW -->

<?php get_footer(); ?>
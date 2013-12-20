<?php get_header(); ?>

<div class="row">
  <div class="large-8 columns">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <h1 class="title"><?php the_title(); ?></h1>
      <p><em><?php the_time('l, F jS, Y'); ?></em></p>

      <?php the_content(); ?>
      <hr>
      <?php comments_template(); ?>

    <?php endwhile; else: ?>
      <p><?php _e('Sorry, this page does not exist.'); ?></p>
    <?php endif; ?>

  </div><!-- END large-8 -->

  <div class="large-4 columns">
    <?php get_sidebar(); ?>
  </div><!-- END large-4 (sidebar) -->

</div><!-- END ROW -->

<?php get_footer(); ?>
<?php get_header(); ?>

<div class="row">
  <div class="large-8 columns">
    <h1 class="title">News</h1>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <p><em><?php the_time('l, F jS, Y'); ?> </em></p>
      <?php the_excerpt(); ?><span class="read_more"><a href="<?php the_permalink(); ?>">[ Read More ]</a></span>
      <hr>


    <?php endwhile; else: ?>
      <p><?php _e('Sorry, there are no posts.'); ?></p>
    <?php endif; ?>

  </div><!-- END large-8 -->

  <div class="large-4 columns">
    <?php get_sidebar(); ?>
  </div><!-- END large-4 (sidebar) -->

</div><!-- END ROW -->

<?php get_footer(); ?>
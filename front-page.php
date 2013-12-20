<?php get_header(); ?>

<div class="row">
	<div class="large-12 columns">
		<h1 class="title"><?php bloginfo('name'); ?></h1>
		<h3><?php bloginfo( 'description' ); ?></a></h3>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 
  <?php the_content(); ?>

<?php endwhile; else: ?>
  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

	</div>
</div>
<?php get_footer(); ?>
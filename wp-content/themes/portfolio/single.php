<?php get_header(); ?>

<div class="projects">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>

	<h2><?php echo get_the_title(); ?></h2>

	<?php the_content(); ?>

<?php endwhile; endif;?>

</div>

<?php get_footer(); ?>
<?php /* Template Name: Single Page */ ?>

<?php get_header(); ?>

<header id="heading" class="tiny">
				
	<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
		
</header>

	<?php print_menu('tiny'); ?>

<div class="wrapper push">

<div class="content">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>

	<h2><?php echo get_the_title(); ?></h2>

	<?php the_content(); ?>

<?php endwhile; endif;?>

</div>

</div>

<?php get_footer(); ?>
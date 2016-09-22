<?php get_header(); ?>

<div class="singlepage_heading">

	<header id="heading">
				
		<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
		
	</header>

	<?php print_menu(); ?>

</div>

<div class="wrapper">

<div class="content">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>

	<h2><?php echo get_the_title(); ?></h2>

	<?php the_content(); ?>

<?php endwhile; endif;?>

</div>

</div>

<?php get_footer(); ?>
<?php get_header(); ?>


<header id="heading">
				
	<h2 class="subheading"><span class="apple">Hello!</span><br />
		My name is Nyssa Jayne<br />
		and these are some of the things I've made.</h2>
	<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
		
</header>

<?php print_menu(''); ?>

<div class="wrapper">

<div id="projects" class="content">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>

	<a href="<?php echo get_the_permalink(); ?>">
		<div class="project">

			<?php echo get_the_post_thumbnail(); ?>
			<h2><?php echo get_the_title(); ?></h2>

		</div>
	</a>

<?php endwhile; endif;?>

</div>

</div>

<?php get_footer(); ?>
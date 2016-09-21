<?php get_header(); ?>

<div class="wrapper">

			<header id="heading">
				
				<h2 class="subheading"><span class="apple">Hello!</span><br />
					My name is Nyssa Jayne<br />
					and these are some of the things I've made.</h2>
				<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
		
			</header>

			<?php print_menu(); ?>

<div class="projects">

<?php query_posts('category_name=portfolio'); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>

	<a href="<?php echo get_the_permalink(); ?>">
		<div class="project">

			<?php echo get_the_post_thumbnail(); ?>
			<h2><?php echo get_the_title(); ?></h2>

		</div>
	</a>

<?php endwhile; endif;?>

</div>

		<footer id="footer">
			<div class="accordion">
				<dt><h3><span class="fa fa-group"></span> Social Media <i class="fa fa-angle-down"></i></h3></dt>
				<ul>
					<li><span class="fa fa-twitter"></span> <a href="http://www.twitter.com/nyssajayne">Twitter</a></li>
					<li><span class="fa fa-instagram"></span> <a href="http://instagram.com/nyssajayne">Instagram</a></li>
					<li><span class="fa fa-rss"></span> <a href="http://shoesandblues.com/?feed=rss2">RSS</a></li>
					<li><span class="fa fa-heart"></span> <a href="http://www.bloglovin.com/en/blog/3590373">Bloglovin'</a></li>
					<li><span class="fa fa-cut"></span> <a href="http://www.ravelry.com/nyssajayne">Ravelry</a></li>
					<li><span class="fa fa-github"></span> <a href="http://www.github.com/nyssajayne">Github</a></li>
				</ul>
				
				<dt><h3><span class="fa fa-bookmark-o"></span> Categories <i class="fa fa-angle-down"></i></h3></dt>
				<ul>
					<?php wp_list_cats(); ?>
				</ul>
				
				<dt><h3><span class="fa fa-calendar-o"></span> Archives <i class="fa fa-angle-down"></i></h3></dt>
				<ul>
					<?php wp_get_archives( 'type=monthly' ); ?> 
				</ul>
				
				<dt><h3><span class="fa fa-desktop"></span> Favourite Blogs <i class="fa fa-angle-down"></i></h3></dt>
				<ul>
					<?php wp_list_bookmarks('title_li=&categorize=0'); ?> 
				</ul>
			</div>
		
			<p>All the content is mine, unless mentioned.<br>
			Any questions, feel free to email me -  nyssajayne@gmail.com</p>
		
		</footer>

<?php get_footer(); ?>
<?php get_header( ); ?>

<div id="container2">
	<div id="container1">
<?php get_sidebar( ); ?>

		<div id="left-side">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>

			<article>
			
				<h1><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
				
				<section class="metadata">
					<h2><time pubdate><?php the_date(); ?></time></h2>
				</section>
			
				<section class="text">

					<?php the_content(); ?>
				
				</section>
				
				<section class="metadata">
				
					<h3><?php comments_popup_link( 'no comments', 'one comment', '% comments'); ?> </h3>
					
					<?php if(has_category()): ?>
					<h3>filed under <?php the_category(', ') ?></h3>
					<?php endif; ?>
					
					<?php if(has_tag()): ?>
						<h3>tagged <?php the_tags(' ', ', ') ?></h3>
					<?php endif; ?>
					
					<span class="fa fa-paw fa-1x"></span>
					
				</section>
				
			</article>
			
<?php endwhile; ?>

			<section class="prev-next-nav">
				
				<h3><?php posts_nav_link(' | ', '<i class="fa fa-long-arrow-left"></i> Previous', 'Next <i class="fa fa-long-arrow-right"></i>'); ?></h3>
				
			</section>
			
<?php endif; ?>

		</div>
	</div>
</div>
		
<?php get_footer( ); ?>
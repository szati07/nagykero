<?php get_header();?>
<div>
	<section>
		<div>
			<?php if( have_posts() ): while( have_posts() ) : the_post(); ?>
				
				<h1><?php the_title(); ?></h1>
				<p><?php the_content(); ?></p>
				
			<?php endwhile; else : ?>

				<p><?php __e('Sorry, no pagesfound.', 'nagykero_text_domain');?></p>

			<?php endif; ?>
		</div>
	</section>
</div>
<?php get_footer();?>
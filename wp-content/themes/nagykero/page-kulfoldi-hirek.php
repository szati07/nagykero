<?php
	/*
		Template Name: Kulfoldi Hirek
	*/
?>

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

		<?php
			$args = array(
				'post_type' => 'kulfoldi_hirek'
				);
			$query = new WP_Query($args);
		?>
		<section>
		
			<?php 
					if ($query -> have_posts()) :while ($query -> have_posts()):$query ->the_post(); 
				?>
			<div>
				<a href="<?php the_permalink();?>">
				<?php the_post_thumbnail('thumbnail');?></a>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				<p><?php the_field('short_description') ?></p>

			</div>
		<?php endwhile; endif; wp_reset_postdata(); ?>
		</section>
	
</div>
<?php get_footer();?>
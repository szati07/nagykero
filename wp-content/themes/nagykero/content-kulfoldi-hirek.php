<?php
			
			$num_posts = -1;
			if( is_front_page() ) $num_posts = 5;
			$args = array(
				'post_type' => 'kulfoldi_hirek',
				'posts_per_page' => $num_posts
				);
			$query = new WP_Query($args);
		?>
		<section>
		
			<?php 
					if ($query -> have_posts()) :while ($query -> have_posts()):$query ->the_post(); 
				?>
			<div class="news-post">
				<a class="news-img" href="<?php the_permalink();?>">
				<?php the_post_thumbnail('medium');?></a>
				<h2><a class="news-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p class="news-description"><?php the_field('short_description') ?></p>
				<p class ="dots">
					<strong>• • • •</strong>
				</p>

			</div>
		<?php endwhile; endif; wp_reset_postdata(); ?>
		</section>
		
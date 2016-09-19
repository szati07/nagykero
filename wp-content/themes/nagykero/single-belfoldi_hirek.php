<?php get_header(); ?>
	<div class="wrapper">
	      	
	        	
	        	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	          		<!-- Primary Column -->
		          	
		  	<!-- Secondary Column -->
					<div>
				    	<div>
							<h1 class="news-single-heading"><?php the_title();?></h1>
							<div>
				            	<div class="news-page-content">
				            		<?php the_field('bf_tartalom'); ?>
								</div>
								<?php comments_template(); ?>
							</div>

			      		</div>
			      	</div>
		      	<?php endwhile; endif; ?>
		      	</div>
<?php get_footer(); ?>
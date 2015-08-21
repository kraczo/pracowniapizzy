<?php get_header(); ?>
<?php get_sidebar(); ?>

    <div id="home" class="big">
	
		<?php while (have_posts()) : the_post(); ?>
				
					<h1><?php the_title(); ?></h1>
					
					<div id="page_content">
					<?php the_content(); ?>
					</div>
				<?php endwhile; ?> 
	</div>
	
<?php get_footer(); ?>
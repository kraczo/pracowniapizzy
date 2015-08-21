<?php get_header(); ?>
<?php get_sidebar(); ?>
<!-- sprawdzenie zmiany dla gita przy dodawaniu do repo-->
    <div id="home" class="big">
	
		<?php while (have_posts()) : the_post(); ?>
		
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
			
		<?php endwhile; ?>
		<?php get_search_form(); ?>
	
	</div>
	
<?php get_footer(); ?>
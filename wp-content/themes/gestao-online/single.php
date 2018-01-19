<?php get_header(); ?>
			
<div id="content-post">

	<div id="inner-content" class="row">

		<main id="main" class="large-12 medium-12 columns p-t-c p-b-c p-t-50 p-b-50 post" role="main">
		
		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		    	<?php get_template_part( 'parts/loop', 'single' ); ?>
		    	
		    <?php endwhile; else : ?>
		
		   		<?php get_template_part( 'parts/content', 'missing' ); ?>

		    <?php endif; ?>

		</main> <!-- end #main -->

		<!-- <?php get_sidebar(); ?> -->

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>
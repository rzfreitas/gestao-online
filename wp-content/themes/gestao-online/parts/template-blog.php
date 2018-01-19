<?php
/*
Template Name: Blog
*/
?>	

<?php get_header(); ?>	

	<div id="content">
		
		<div id="inner-content" class="row-full">
			
		    <main id="main" class="large-12 medium-12 columns no-p p-b-70" role="main">
			
			<div class="row text-center t-blog p-t-50 p-b-30 p-t-c p-b-c">
				<?php get_template_part('searchform'); ?>
				<h1>Artigos Recentes</h1>
			</div>

			<?php
		  	$paged = get_query_var('paged') ? get_query_var('paged') : 1;
		  	$custom_args = array(
			  'post_type' => 'post',
			  'posts_per_page' => 18,
			  'paged' => $paged
			);			
		  	$custom_query = new WP_Query( $custom_args ); ?>

		  	<?php if ( $custom_query->have_posts() ) : ?>		
			<!-- the loop -->			
			<?php $count = 0; ?>
			<div class="text-center">
			<?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>

				<?php if ( $count < 2  ) : ?>
				
				<article class="recents">					
					<a class="text-center" href="<?php the_permalink();?>"><?php the_post_thumbnail( array(400,400) , array( 'alt' => get_the_title(), 'title' => get_the_title() ) ); ?></a>
					<h2><strong><a href="<?php the_permalink();?>"><?php the_title(); ?></a></strong></h2>
					<b><small><i class="fa fa-calendar"></i> <?php the_time('j \d\e F \d\e Y') ?></small></b>
					<?php the_excerpt(); ?>
					<a class="btn-def btn-verde" href="<?php the_permalink();?>"> Continuar lendo</a>					
				</article>
				
				<?php else :?>

				<article class="row border-p">					
					<div class="large-3 columns no-p-l">
						<a href="<?php the_permalink();?>"><?php the_post_thumbnail('medium', array( 'alt' => get_the_title(), 'title' => get_the_title() ) ); ?></a>
					</div>				
				
					<div class="large-9 columns text-left">
						<h2><strong><a href="<?php the_permalink();?>"><?php the_title(); ?></a></strong></h2>
						<b><small><i class="fa fa-calendar"></i> <?php the_time('j \d\e F \d\e Y') ?></small></b>
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink();?>"><div class="text-left"><i class="fa fa-long-arrow-right"></i> Continuar lendo</a>
					</div>												
				</article>

				<?php endif; ?>

				<?php $count++; endwhile; ?></div>
				<!-- end of the loop -->

				<!-- pagination here -->
				<div class="row">
					<?php
						if (function_exists(custom_pagination)) {
						custom_pagination($custom_query->max_num_pages,"",$paged);
						}
					?>
				</div>

			</div>
			<?php wp_reset_postdata(); ?>

			<?php else:  ?>			
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
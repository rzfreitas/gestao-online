<?php
/*
Template Name: Planos
*/
?>	

<?php get_header(); ?>	

	<div id="content">
		
		<div id="inner-content" class="row-full">
			
		    <main id="main" class="large-12 medium-12 columns no-p" role="main">
				
				<div class="row columns p-t-50 p-b-30 p-t-c p-b-c">
					<h1 class="text-center f-marinho"><?php the_title(); ?></h1>
					<div class="p-t-30">
						<?php while(have_posts()) : the_post();					
							the_content(); 
						endwhile; ?>
					</div>
				</div>

				<div class="row columns p-b-30 p-t-c p-b-c">
					<h2 class="text-center f-marinho"><?php the_field('subtitulo_1'); ?></h2>
					<?php the_field('conteudo_1'); ?>
				</div>

				<div class="row row-eq-height columns">
					<div class="large-4 columns b-azul">
						<h3><?php the_field('plano_1'); ?></h3>
						<?php the_field('preco_plano_1'); ?>
					</div>
					<div class="large-4 columns b-marinho m-l-5 m-r-5">
						<h3><?php the_field('plano_2'); ?></h3>
						<?php the_field('preco_plano_2'); ?>
					</div>
					<div class="large-4 columns b-azul">
						<h3><?php the_field('plano_3'); ?></h3>
						<?php the_field('preco_plano_3'); ?>
					</div>
				</div>

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
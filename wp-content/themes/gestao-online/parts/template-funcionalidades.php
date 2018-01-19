<?php
/*
Template Name: Funcionalidades
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

				<div class="row columns vantagens">
					<?php if ( have_rows ('quadros') ):
						$count = 0; 
						?>							
						<ul class="p-t-30">
							<?php while ( have_rows('quadros') ): the_row(); ?>												
								<?php
									if (($count %2) == 0 ) : ?>										
										<li class="b-azul">							
											<?php the_sub_field('conteudo_quadro'); ?>
										</li>
									<?php else :?>
										<li class="b-marinho">
											<?php the_sub_field('conteudo_quadro'); ?>
										</li>
									<?php endif; ?>																		
							<?php $count++; endwhile; ?>
						</ul>							
					<?php endif; ?>	
				</div>

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
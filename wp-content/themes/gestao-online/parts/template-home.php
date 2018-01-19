<?php
/*
Template Name: Home
*/
?>	

<?php get_header(); ?>	

	<div id="content">
		
		<div id="inner-content" class="row-full">
			
		    <main id="main" class="large-12 medium-12 columns no-p" role="main">
				
				<div class="fundo-home">
					<div class="row columns center-div p-b-c p-t-c-50">						
						<div class="frases animated fadeInUp p-t-c-50">
							<h2><div id="frases"></div></h2>
						</div>						

						<script>
							jQuery(function(){
								var typed5 = new Typed('#frases', {
									strings: ['<?php the_field('frase_1'); ?>', '<?php the_field('frase_2'); ?>'],
									typeSpeed: 50,
									backSpeed: 15,
									backDelay: 2500,
									startDelay: 800,
									cursorChar: '|',									
									loop: true,									
								});
							})
						</script>	
					
						<div class="btns btns-center p-t-50">
							<ul>
								<li><a class="btn-def btn-verde">VER DEMONSTRAÇÃO</a></li>
								<li><a class="btn-def btn-verde">TESTAR GRATUITAMENTE</a></li>
							</ul>						
						</div>						
					</div>
					<div class="text-center arrow-down p-t-c">
						<a onclick="scrollToElement('#begin', -160)" class="icon-pulse animated fadeOutDown"><i class="fa fa-angle-double-down" aria-hidden="true"></i></a>
					</div>				
				</div>

				<div class="row p-t-50 p-t-c-500" id="begin">
					<h2 class="columns text-center"><?php the_field('titulo_bloco_1'); ?></h2>
					<div class="large-6 columns p-t-30">						
						<span class="text-justify"><?php the_field('bloco_1'); ?></span>
					</div>
					<div class="large-6 columns p-t-30">
						<iframe src="https://player.vimeo.com/video/239694725" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>							
				</div>

				<div class="row p-t-70">
					<div class="center-title">
						<h2>Funcionalidades</h2>
					</div>
					<img class="seta-verde" src="<?php echo get_template_directory_uri(); ?>/assets/images/seta-verde.png" alt="gestão online" />					
				</div>

				<div class="row columns p-t-70 vantagens text-center">
					<h2><?php the_field('titulo_vantagens'); ?></h2>
					<span class="text-justify"><?php the_field('bloco_texto_2'); ?></span>
					<?php if ( have_rows ('vantagens_h') ):
						$count = 0; 
						 ?>							
						<ul class="p-t-30">
							<?php while ( have_rows('vantagens_h') ): the_row(); ?>
								<?php $image = get_sub_field('icone'); ?>						
								<?php
									if (($count %2) == 0 ) : ?>										
										<li class="b-azul">											
											<h3 class="text-center"><?php the_sub_field('vantagem'); ?></h3>
											<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />											
											<?php the_sub_field('descricao'); ?>
										</li>
									<?php else :?>
										<li class="b-marinho">
											<h3 h3 class="text-center"><?php the_sub_field('vantagem'); ?></h3>
											<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
											<?php the_sub_field('descricao'); ?>
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
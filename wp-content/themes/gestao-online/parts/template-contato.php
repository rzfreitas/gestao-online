<?php
/*
Template Name: Contato
*/
?>	

<?php get_header(); ?>	

	<div id="content">
		
		<div id="inner-content" class="row-full">
			
		    <main id="main" class="large-12 medium-12 columns no-p" role="main">
				
				<div class="row p-t-50 p-b-30 p-t-c p-b-c">
					<h1 class="text-center f-marinho"><?php the_title(); ?></h1>
					<h2 class="text-center f-verde"><i class="fa fa-phone"></i> 31 3222-4455</h2>
				</div>

				<div class="row text-center">
					<h2>Dúvidas? Sugestões? Envie uma mensagem!</h2>
					<div class="form-contato">
						<?php echo do_shortcode('[contact-form-7 id="112" title="Página de Contato"]'); ?>
					</div>
				</div>

				<div class="row p-t-50">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3750.721854820228!2d-43.958380685044396!3d-19.936122586600277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa69771057fad67%3A0xbbf8950b4232cd62!2sRua+General+Dion%C3%ADsio+Cerqueira%2C+315+-+Gutierrez%2C+Belo+Horizonte+-+MG%2C+30441-063!5e0!3m2!1spt-BR!2sbr!4v1506710141700" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
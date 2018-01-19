				
				<footer class="footer" role="contentinfo">
					<?php if (!is_page('Blog')) { ?>
						<div class="row-full news p-t-70 p-b-70">
							<div class="row border-footer">
								<?php get_template_part ('parts/content' , 'news'); ?>										
							</div>						
						</div>
					<?php } ?>
					<div id="inner-footer">
						<div class="row p-t-50 p-b-50 p-t-c p-b-c">
							<div class="large-6 columns">
								<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/logo-gestao-online.png" /></a>
							</div>
							
							<div class="large-6 columns" id="footer-form">
								<h3>CONTATO</h3>
								<div class="icons-top i-bot">
									<i class="fa fa-phone text-center"></i> <span class="tel">+55 31 3222-4455</span>
								</div>
								<?php echo do_shortcode('[contact-form-7 id="25" title="Formulário rodapé"]'); ?>
							</div>
						</div>

						<div class="row-full b-foot p-t-c p-b-c">
							<div class="row row-eq-height p-t-20 p-b-20">
								<div class="large-6 medium-12 small-12 columns">
									<p class="source-org copyright">&copy; <?php echo date('Y'); ?> Gestão Online - Todos os direitos reservados.</p>
								</div>

								<div class="large-2 medium-12 small-6 columns">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/voar-comunicacao.png">
								</div>
								
								<div class="large-4 medium-12 small-6 columns">
									<div class="icons-top bot text-right">										
										<i class="fa fa-facebook text-center"></i>										
										<i class="fa fa-caret-right text-center"></i>
									</div>
								</div>
							</div>
						</div>
												
					</div> <!-- end #inner-footer -->
				</footer> <!-- end .footer -->
			</div>  <!-- end .main-content -->
		</div> <!-- end .off-canvas-wrapper -->
		<?php get_template_part('parts/content' , 'forms'); ?>
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->
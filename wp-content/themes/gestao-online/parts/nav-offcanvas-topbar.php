<!-- By default, this menu will use off-canvas for small
	 and a topbar for medium-up -->

<div class="top-bar fixar navbar-inverse" id="top-bar-menu">
	<div class="row">
		<div class="top-bar-left float-left">
			<ul class="menu">
				<li class="logo-top show-for-medium"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/logo-gestao-online.png" /></a></li>
			</ul>
		</div>
		<div class="top-bar-right show-for-medium menu-itens">
			<div class="icons-top text-right">				
				<i class="fa fa-facebook text-center"></i>
				<i class="fa fa-caret-right text-center"></i>
				<i class="fa fa-search text-center" id="icon-search" data-toggle="modal-search"></i>
			</div>
			<?php joints_top_nav(); ?>	
		</div>
		<div class="show-for-small-only">			
			<div class="small-6 columns">
				<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/logo-gestao-online.png" /></a>
			</div>
			<div class="small-6 columns icon-mob text-center p-t-c">
				<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
				<a data-toggle="off-canvas"><?php _e( '', 'jointswp' ); ?><i class="fa fa-bars"></i></a>
			</div>			
		</div>		
	</div>
</div>
<img class="seta-azul animated fadeInLeft" src="<?php echo get_template_directory_uri(); ?>/assets/images/seta-azul.png" alt="gestão online" />
<div class="fix-height"></div>
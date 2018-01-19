<h2 class="text-center p-t-30">ARTIGOS RECENTES</h2>
<div class="p-b-50">
	<?php
	$aRecentPosts = new WP_Query("showposts=3");
	while($aRecentPosts->have_posts()) : $aRecentPosts->the_post();?>		
	<div class="large-4 medium-6 columns text-center p-t-50">	
		<a href="<?php the_permalink() ?>" title=""> <?php the_post_thumbnail('medium');?></a>		
		<h2><a href="<?php the_permalink() ?>" title="Veja: <?php the_title(); ?> " rel="bookmark"><?php the_title();?></a></h2>
		<?php the_excerpt();?>
		<a class="btn-def btn-verde" href="<?php the_permalink() ?>">Leia mais <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
	</div>		
	<?php endwhile; wp_reset_query(); ?>
</div>
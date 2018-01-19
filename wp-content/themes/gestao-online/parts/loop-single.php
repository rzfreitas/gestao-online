<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
	<header class="article-header">	
		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>		
    </header> <!-- end article header -->
					
    <section class="entry-content" itemprop="articleBody">
		<?php the_content(); ?>
		<?php get_template_part( 'parts/content', 'byline' ); ?>
		<p><strong>Compartilhe:</strong></p>
		<div class="icons-top bot p-b-30">
			<a href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>&t=<?php the_title();?>" target="_blank" title="Compartilhar no Facebook"><i class="fa fa-facebook"></i></a>&nbsp;&nbsp;
			<a href="http://twitter.com/share?text=%20Sharing%20on%20Twitter&url=<?php the_permalink();?>&hashtags=consultoriaonline,certificaçãoISO,VerdeGhaia" target="_blank" title="Compartilhar no Tweeter"><i class="fa fa-twitter"></i></a>&nbsp;&nbsp;
			<a href="http://plus.google.com/share?url=<?php the_permalink() ?>" target="_blank" title="Compartilhar no Google+"><i class="fa fa-google-plus"></i></a>&nbsp;&nbsp;
			<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink() ?>&title=<?php the_title(); ?>" target="_blank" title="Compartilhar no LinkedIn"><i class="fa fa-linkedin"></i></a>
		</div>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jointswp' ), 'after'  => '</div>' ) ); ?>
		<p class="tags"><?php the_tags('<span class="tags-title">' . __( 'Tags:', 'jointswp' ) . '</span> ', ', ', ''); ?></p>	
	</footer> <!-- end article footer -->
						
	<?php comments_template(); ?>	
													
</article> <!-- end article -->
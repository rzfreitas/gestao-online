<form class="box-search" role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<ul>
		<li><label>
			<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Digite sua pesquisa...', 'jointswp' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'jointswp' ) ?>" />
		</label></li>
		<li><input type="submit" class="search-submit btn-def btn-azul" value="<?php echo esc_attr_x( 'BUSCAR', 'jointswp' ) ?>" /></li>
	</ul>
</form>
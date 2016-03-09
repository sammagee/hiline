<div class="search-wrapper desktop">
	<form role="search" method="get" action="<?php echo home_url( '/' ); ?>" class="search-form desktop">
		<input type="text" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder' ); ?>" value="<?php echo get_search_query(); ?>" name="s">
	</form>
</div>

<div class="search-wrapper mobile">
	<form role="search" method="get" action="<?php echo home_url( '/' ); ?>" class="search-form mobile">
		<span id="searchtoggle" class="search-toggle">
			<i class="genericon genericon-search"></i>
		</span><!-- #searchtoggle -->

		<div class="search-field">
			<input type="text" class="search-input" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder' ); ?>" value="<?php echo get_search_query(); ?>" name="s">
			<span id="searchclose" class="search-close">
				<i class="genericon genericon-close-alt"></i>
			</span><!-- #searchclose -->
		</div>
	</form>
</div>

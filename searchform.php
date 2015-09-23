<div class="search-wrapper">
	<form role="search" method="get" action="<?php echo home_url( '/' ); ?>" class="search-form">
		<input type="text" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder' ); ?>" value="<?php echo get_search_query(); ?>" name="s">
	</form>
</div>
<form role="search" method="get" id="searchform" class="searchform" action="http://localhost/">
	<div>
		<label class="screen-reader-text" for="s"><?php _e('Search for:', 'tema-aula') ?></label>
		<input type="text" value="<?php get_search_query() ?>" name="s" id="s">
		<input type="submit" id="searchsubmit" value="<?php __('Search', 'tema-aula')?>">
		<input type="hidden" value="post" name="post_type" id="post_type" />
	</div>
</form>
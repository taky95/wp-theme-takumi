<?php get_template_part("profile"); ?>
<div class="side">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
	<h2 class="widget_title">About</h2>
	<p>Hello World</p>
<?php endif; ?>
</div>
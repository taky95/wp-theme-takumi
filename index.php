<?php get_header(); ?>

 <div id="container">
 	<div id="content">
 		<h1>Updates</h1>
 		<img class="trans-img" src="/wp-content/themes/ameba/images/trans-back.png" />
 		<ul>
	 		<?php get_template_part( 'updates' ); ?>
 		</ul>
 	</div>
	<div id="content">
		<h1>Read Latest Articles</h1>
	<?php get_template_part( 'loop' ); ?>
	</div>
 
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
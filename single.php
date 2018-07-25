<?php get_header(); ?>

<?php 
if(is_user_logged_in()){
?>
<script>
window.onload=function(){
	var textArea = document.getElementsByTagName("textarea");
	textArea[0].style.top = 0;
}
	
</script>
<?php 
}
?>


<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
	<div id="content">
	<img id="title-icon" src="/wp-content/themes/ameba/images/pen.png" align="left"/>
	<h1><?php the_title(); ?></h1>
	<hr>
	<br>
	<br>
	<?php the_content(); ?>
	
	</div>
	<div id="commentpage">
	<?php comments_template(); ?>
	</div>
<?php
endwhile;
endif;
?>
 
<?php get_sidebar(); ?>
<?php get_footer(); ?>
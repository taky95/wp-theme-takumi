<?php
$args = array(
   'cat'=>1,3,
    'posts_per_page'=> 7
);

$query = new WP_Query( $args );
while ( $query->have_posts() ) : $query->the_post();

?>
 
<div class="post">
	<?php
		if (has_post_thumbnail() )  {
			echo get_the_post_thumbnail(get_the_ID(), array(100,100), ['class' => 'img-featured']);
		} else {
			echo '<img class="img-featured" src="/wp-content/themes/ameba/images/no-image.png">';
		} 
	?>
	<div class="post-excerpt">
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php the_excerpt(); ?>
	</div>
</div>
<hr>
<?php
endwhile;

?>
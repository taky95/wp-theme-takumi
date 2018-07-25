<?php

$args = array(
   'category_name'=>'updates',
    'posts_per_page'=> 3,
);

$query = new WP_Query( $args );
while ( $query->have_posts() ) : $query->the_post();

?>
<li>
<div class="post">
	<p class="updates"><?php the_title(); ?></p>
</div>
</li>
<?php
endwhile;
?>
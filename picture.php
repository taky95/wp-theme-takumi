<?php
/*
Template Name: Picture
*/
?>

<?php
	function get_images_from_media_library() {
	    $query = new WP_Query( 
			array( 
			    'post_type' => 'pictures', 
			    'posts_per_page' => -1,
			    'fields' => 'ids'
			) 
		);
		
	    $args = array(
	        'post_type' => array('attachment'),
	        'post_mime_type' =>'image',
	        'post_status' => 'inherit',
	        'posts_per_page' => -1,
	        'post_parent__in' => $query->posts,
	        'orderby' => 'rand'
		);
	    $query_images = new WP_Query( $args );
	    $images = array();
	    foreach ( $query_images->posts as $image) {
        	$images[]= $image->guid;
    	}
    	return $images;
	}
	
	function pippin_get_image_id($image_url) {
	    global $wpdb;
	    $attachment = $wpdb->get_col($wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE guid='%s';", $image_url )); 
	    return $attachment[0]; 
	}
	
	function display_images_from_media_library() {

	    $imgs = get_images_from_media_library();
	    $html = '<div class="container grid-row"><div class="grid-column">';
		$count=0;
	    foreach($imgs as $img) {
	    	$attachment_id = pippin_get_image_id($img);
	    	$data = wp_get_attachment_metadata( $attachment_id, $unfiltered );
	    	$width = $data->width;
			$height = $data->height;
			if($count==5){
				$html .= '</div><div class="grid-column">';
				$count=0;
			}
	        $html .= '<div class="item"> <a href="' . $img . '" data-lity ><img class="pics" src="' . $img . '" width="'. $width . '" height="'. $height . '" alt="" /></a></div>';
			$count++;
	    }

	    $html .= '</div></div>';
	
	    return $html;

	}
?>

<?php get_header(); ?>
	<script>
	/*global $*/
	$(function() {
		$(".photo").hover(function(){
			$(this).css("transform", "translate3d(0, 0, 0)")
			$(this).css("opacity", ".5")
			$(this).css("transition", "opacity 1s")
			
		}, function(){
			$(this).css("opacity", "1")
			$(this).css("transition", "opacity 1s")
		});
	});
	</script>
	<div id="aboutpage">
		<img id="photo-title" src="/wp-content/themes/ameba/images/photo-title.png"/>
		</br>
		
		<?php echo display_images_from_media_library(); ?>
	</div>
 	
<?php get_footer(); ?>
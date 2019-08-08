<?php
/*
Template Name: Gallery
*/
?>
<?php get_header(); ?>
<div class="content gallery-back">
    <h1><?php echo get_the_title(); ?></h1>
    
    <p id="license-text"> 
        Takmi's free photo project by Takumi<br/>
        <br/>
        To the extent possible under law, the person who associated CC0 with
        Takumi's portfolio has waived all copyright and related or neighboring rights<br/>
        to Takumi's portfolio.
        <br/><br/>
        You should have received a copy of the CC0 legalcode along with this
        work.  If not, see <http://creativecommons.org/publicdomain/zero/1.0/>.
    </p>
<?php
	
		
    $args = array(
        'numberposts' => -1,
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'post_mime_type' => 'image',
        'post_parent' => $post-> ID,
        'post_status' => null,
        'post_type' => 'attachment'
    );

    $images = get_children( $args );
    if($images){ 
?>
<!-- Need to set up column's height about the same-->
        <div id="gallery">
            <div class="gallery-row">
                <div class="gallery-col">
                <?php $count=0; ?>
                <?php foreach($images as $image){ ?>
                    <div class="img-container thumbnail" data-emergence="hidden">
                        <img src="<?php echo $image->guid; ?>" alt="<?php echo $image->post_title; ?>" title="<?php echo $image->post_title; ?>" />

                        <div class="image-overlay">
                            <h2 class="text-light"><?php echo $image->post_title; ?></h2>
                            <p>
                                <?php echo $image -> post_content; ?>
                            </p>
                            <a class="button rounded" href="<?php echo $image->guid;?>" download>Download</a>
                        </div>
                    </div>
                <?php $count++;
                    if($count==5){?>
                        </div>    
                        <div class="gallery-col">
                        <?php $count=0;
                    } ?>
                <?php } ?>
                </div>
            </div>
        </div>

    <?php }else{?>
        <p>
            No photos are found. Please wait for the updates.
        </p>
    <?php } ?>
</div>
<?php get_footer(); ?>
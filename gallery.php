<?php
/*
Template Name: Gallery
*/
?>
<?php get_header(); ?>
<script>
    function copyText(){
      var copyText = document.getElementById("credit");

      /* Select the text field */
      copyText.select();

      /* Copy the text inside the text field */
      document.execCommand("copy");

      /* Alert the copied text */
      alert("Copied the text: " + copyText.value);
    }
</script>

<div class="content gallery-back">
    <h1><?php echo get_the_title(); ?></h1>
    
    <div id="license-text"> 
        <h3>Welcome to my free photo project.</h3>
        <br/>
        <h4>What's the project about?</h4>
        <p class="tab">
            The part of the reason I started taking photos was to have quality picture I can use freely for my web projects and apps. I used to have really hard time finding right free photo I want to use which doesn't violate the copyright. In recent years, lots of talented photographers have started sharing thier awesome projects for free as creative commons and, now, as much as I enjoy using them, I would love to contribute back to the community by sharing some of my photos as well. For me, taking photos became something I enjoy whenever I go travelling or do some activities with friends, and these are some of those my best shots. If someone in need could find some use in my photos, that would be my pleasure.   
        </p><br/>
        <h4>How to use?</h4>
        <p class="tab">
            All photos here in this page is under CC4.0, which means you can use it however you want, as long as you credit me on your project. To credit me you can copy and paste the link tag below or have my name somewhere in your project. I hope you find something you like here.<br/>
            <br/>
        </p>
        <div id="credit-wrap">
            <input type="text" name="credit_text" value="<a href=&quot;https://takumiminohara.site/&quot;>&copy;Takumi.M - 2019</a>" id="credit" readonly>
            <button onclick="copyText()">Copy</button>
        </div>
        
        <br/>
        <h4>License</h4>
        <p class="tab">
            Tak's-free-photo-project &copy; by Takumi.M<br/>
            <br/>
            Tak's-free-photo-project is licensed under a
            Creative Commons Attribution-ShareAlike 4.0 International License.<br/>
            <br/>
            You should have received a copy of the license along with this
            work.  If not, see <a href="http://creativecommons.org/licenses/by-sa/4.0/" target="_blank">http://creativecommons.org/licenses/by-sa/4.0/</a>.
        </p>
        <br/><br/>
        <a rel="license" href="http://creativecommons.org/licenses/by/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by/4.0/88x31.png" /></a><br />This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Attribution 4.0 International License</a>.
    </div>
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
                            <div class="button-wrapper">
                                <a class="button rounded" href="<?php echo $image->guid;?>" download>Download</a>
                                <a class="button rounded" href="<?php echo $image->guid; ?>" data-lity>Show</a>
                            </div>
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
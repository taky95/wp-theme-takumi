<!DOCTYPE html>  
<html lang="en">  
<head>  

<meta charset="utf-8">  
<title><?php wp_title(' | ', true, 'right');?><?php bloginfo('name');?></title>  
<meta name="description" content="Takumi's portfolio website." /> 
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon-32x32.png" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" media="all" />
<?php wp_deregister_script('jquery'); ?>
<?php wp_head(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/slide.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/scroll.js"></script>
<link href="<?php echo get_stylesheet_directory_uri(); ?>/js/lity-2.3.1/dist/lity.css" rel="stylesheet">
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/lity-2.3.1/vendor/jquery.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/lity-2.3.1/dist/lity.js"></script>

<style>
@import url('https://fonts.googleapis.com/css?family=Gamja+Flower|Gugi|Roboto+Mono:300|Ubuntu');
</style>

</head>  
<script>
    /* global $ */
    /* global lity */
    // Open a URL in a lightbox
    var lightbox = lity('//www.youtube.com/watch?v=XSGBVzeBUbk');
    
    // Bind as an event handler
    $(document).on('click', '[data-lightbox]', lity);
</script>
<body>
    <?php get_template_part('nav'); ?>
    <div id ="header">  
        <img class="slideshow" src="<?php echo get_stylesheet_directory_uri(); ?>/images/header1.jpg" />
        <img class="slideshow" src="<?php echo get_stylesheet_directory_uri(); ?>/images/header2.jpg" />
        <img class="slideshow" src="<?php echo get_stylesheet_directory_uri(); ?>/images/header3.jpg" />
    </div>
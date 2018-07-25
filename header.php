<!DOCTYPE html>  
<html lang="en">  
<head>  

<meta charset="utf-8">  
<title><?php wp_title(' | ', true, 'right');?><?php bloginfo('name');?></title>  
<meta name="description" content="This is a website where Takumi tries out whatever he wants." /> 
<link rel="shortcut icon" href="/wp-content/themes/ameba/images/favicon-32x32.png" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>" media="all" />
<?php wp_deregister_script('jquery'); ?>
<?php wp_head(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="/wp-content/themes/ameba/js/slide.js"></script>
<script type="text/javascript" src="/wp-content/themes/ameba/js/scroll.js"></script>
<link href="/wp-content/themes/ameba/js/lity-2.3.1/dist/lity.css" rel="stylesheet">
<script src="/wp-content/themes/ameba/js/lity-2.3.1/vendor/jquery.js"></script>
<script src="/wp-content/themes/ameba/js/lity-2.3.1/dist/lity.js"></script>

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
        <img class="slideshow" src="/wp-content/themes/ameba/images/header1.jpg" />
        <img class="slideshow" src="/wp-content/themes/ameba/images/header2.jpg" />
        <img class="slideshow" src="/wp-content/themes/ameba/images/header3.jpg" />
    </div>
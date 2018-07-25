<html>
<head>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/blog.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/separate.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/floating_text.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:500,100|Amatic+SC|Fascinate" rel="stylesheet">
</head>
<script>
/* global $ FLOATING_TEXT */
    $(document).ready(function(){
        FLOATING_TEXT.float();
    })
    
</script>
<body>
    <div id="side"></div>
<div id="content"> 
<div class="floating_text run-animation" data-float-duration='6'
     data-float-translate='5' id="title">
<h1>Takumi</h1>
</div></br>
<div class="floating_text run-animation" data-float-duration='6'
     data-float-translate='5' id="title">
<h1>Minohara</h1>
</div>
<hr class="grow-start">
<div id="content-right">
    <p id="sub">&lt;!-- Hello World --&gt;</p>
<img id="me" src="<?php bloginfo('template_directory'); ?>/images/me.png" /> 
    
</div>

<div id="menu">
    <ul>  
        <li><a href="<?php echo esc_url( home_url( '/' ) );?>">Home</a></li>
        <li><a href="<?php echo get_permalink( get_page_by_title("News") ); ?>">Blog</a></li>  
        <li><a href="<?php echo get_permalink( get_page_by_title("About") ); ?>">About Me</a></li>  
        <li><a href="<?php echo get_permalink( get_page_by_title("Picture") ); ?>">Pictures</a></li>  
        <li><a href="<?php echo get_permalink( get_page_by_title("Form") ); ?>">Contact</a></li>
    </ul>
</div>
<div id="bg"></div>
</div>     
</body>
</html>
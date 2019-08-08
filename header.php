<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143414626-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-143414626-1');
    </script>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This is a Takumi Minohara's personal portfolio website.">
    
    <title><?php bloginfo('name');?></title>
    
    <!-- Vendor Libraries read from CDN -->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/vaakash/socializer/80391a50/css/socializer.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/lib/css/query.css">
    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendor/css/balloon.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendor/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendor/css/lity.min.css">
    
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/lib/images/favicon-32x32.png" sizes="32x32">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Barlow|Barlow+Semi+Condensed|Bungee+Shade" rel="stylesheet">    
</head>
<body>
    
    <!-- Nav -->
    <nav role="navigation">
        <div id="menuToggle">
            <input type="checkbox" id="hmbgr"/>
            
            <span></span>
            <span></span>
            <span></span>
            
            <ul id="menu">
                <a href="#" id="link1"><li>About</li></a>
                <a href="#" id="link2"><li>Works</li></a>
                <a href="#" id="link3"><li>Videos & Photos</li></a>
                <a href="#" id="link4"><li>Contact</li></a>
            </ul>
        </div>
    </nav>
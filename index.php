<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143414626-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-143414626-1');
    </script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This is a Takumi Minohara's personal portfolio website.">
    
    <title><?php bloginfo('name');?></title>
    
    <!-- Vendor Libraries read from CDN -->
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/vaakash/socializer/80391a50/css/socializer.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/lib/css/blog.css">
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
    
    <div id="main">
        <h1 id="myName">
            Takumi Minohara
        </h1>
        <div id="scrollDown">
            <a href="#">&#8609;</a>
        </div>
        <div id="skillsets">
            <img src="<?php echo get_template_directory_uri(); ?>/lib/images/skillsets-min.png"/>
        </div>
    </div>
    
    <hr class="grow-start">
    
    <div id="content">
        <!-- About Me --> 
        <div class="slides" id="about">
            <h1>I am...</h1>
            <img id="bgImage" src="<?php echo get_template_directory_uri(); ?>/lib/images/bg-glass.png"/>       
            <img id="profile" src="<?php echo get_template_directory_uri(); ?>/lib/images/profile.jpg" />
            
            <div data-emergence="hidden" class="text-profile balloon">
                I am a web developer, photographer, video editor, snowboarder, and traveller. My focus in coding is to create user-friendly, intuitive, and functional design for websites and web applications. In the past projects, I worked on UI/UX helping to have a better navigation and to make the site more informative for targeted users. Besides the coding, I enjoy experiencing a new culture and learn about their history by travelling and taking photos. The languages I'm familiar are HTML5/CSS3, Javascript, jQuery, PHP, Python, and Ruby on Rails.
                <br />
                <br />
                For further details, please check out my resume:<br/>
                
                <button id="resume" class="image-button light large rounded outline">
                    <span class="mif-file-text icon"></span>
                    <span class="caption"><a href="<?php echo get_template_directory_uri(); ?>/resume.pdf" target="_blank">View My Resume &gt;</a></span>
                </button>
            </div>
        </div>
    
        <!-- Works --> 
        <div class="slides" id="portfolio">
            <h1>Projects/Applications</h1>
            <!-- vertical table -->
            <table id="websites" data-emergence="hidden" class="table row-border">
                <!--img row-->
                <tr>
                    <td><a href="#">Simple Parallax Website</a></td>
                    <td><img src="<?php echo get_template_directory_uri(); ?>/lib/images/thumbs/screenshot.png"/ alt="img1"></td>
                    
                    <td><p>Parallax Web site template designed for simple use as introductory page for small business owners.</p></td>
                    <td>
                        <button class="image-button light outline">
                            <span class="mif-github icon"></span>
                            <span class="caption"><a href="https://github.com/taky95/simple-parallax-website-template" target="_blank">Git Hub</a></span>
                        </button>
                    </td>
                </tr>
                <!-- title -->
                <tr>
                    <td><a href="#">Student Queue Project</a></td>
                    <td><img src="<?php echo get_template_directory_uri(); ?>/lib/images/thumbs/screenshot2.png"/ alt="img2"></td>
                    <td><p>A web application developed to provide efficient support in communication between students and teachers. </p></td>
                    <td>
                        <button class="image-button light outline">
                            <span class="mif-github icon"></span>
                            <span class="caption"><a href="https://github.com/ARealHumanBean/student-queue-project" target="_blank">Git Hub</a></span>
                        </button>
                    </td>
                </tr>
                <!-- link -->
                <tr>
                    <td><a href="http://capstone.camosun.ca/archived-capstone/June2017/" target="_blank">Capstone Project</a></td>
                    <td><img src="<?php echo get_template_directory_uri(); ?>/lib/images/thumbs/screenshot3.png"/ alt="img3"></td>
                    <td><p>Introductry page for capstone project 2017.</p></td>
                    <td>
                        <button class="image-button light outline">
                            <span class="mif-gitlab icon"></span>
                            <span class="caption"><a href="https://gitlab.com/camosunwebcommittee/tech-symposium" target="_blank">Git Lab</a></span>
                        </button>
                    </td>
                </tr>
            </table>
        </div>
        
        <!-- Videos & Photos -->
        <div class="slides clear" id="videos">
            <h1>Video & Photo Editing</h1>
            <div class="tiles-grid size-lg-6">
                <div data-role="tile" data-size="large" data-cover="<?php echo get_template_directory_uri(); ?>/lib/images/tiles/tile1.jpg" ></div>
                
                <div data-role="tile" data-size="large" class="bg-light" data-effect="hover-slide-down">
                    <div class="slide-front d-flex flex-justify-center flex-align-center p-4 ">
                        <span class="mif-infinite icon fg-dark"></span>
                    </div>
                    <div class="slide-back">
                        <img src="<?php echo get_template_directory_uri(); ?>/lib/images/tiles/tile5.jpg" class="h-100 w-100">
                    </div>
                </div>
                
                <div data-role="tile" data-size="large" data-cover="<?php echo get_template_directory_uri(); ?>/lib/images/tiles/tile2.jpg" ></div>
            
                <div data-role="tile" data-size="large" class="bg-light" data-effect="hover-slide-left">
                    <div class="slide-front d-flex flex-justify-center flex-align-center p-4 ">
                        <span class="mif-cross icon fg-dark"></span>
                    </div>
                    <div class="slide-back">
                        <img src="<?php echo get_template_directory_uri(); ?>/lib/images/tiles/tile4.jpg" class="h-100 w-100">
                    </div>
                </div>
                
                <div data-role="tile" data-size="large" class="bg-light" 
                data-vide-bg="<?php echo get_template_directory_uri(); ?>/lib/images/tiles/tile.mp4" >
                     <div class="pressMe fg-dark d-flex flex-justify-center flex-align-center">
                        <p class="text-center ">
                            Press Me!
                        </p>
                    </div>
                </div> 
                
                <div data-role="tile" data-size="large" class="bg-light" data-effect="hover-slide-right">
                    <div class="slide-front d-flex flex-justify-center flex-align-center p-4 ">
                        <span class="mif-minus icon fg-dark"></span>
                    </div>
                    <div class="slide-back">
                        <img src="<?php echo get_template_directory_uri(); ?>/lib/images/tiles/tile3.jpg" class="h-100 w-100">
                    </div>
                </div>
                
                <div data-role="tile" data-size="large" data-cover="<?php echo get_template_directory_uri(); ?>/lib/images/tiles/tile7.jpg" ></div>
                
                <div data-role="tile" data-size="large" class="bg-light" data-effect="hover-slide-up">
                    <div class="slide-front d-flex flex-justify-center flex-align-center p-4 ">
                        <span class="mif-checkmark icon fg-dark"></span>
                    </div>
                    <div class="slide-back">
                        <img src="<?php echo get_template_directory_uri(); ?>/lib/images/tiles/tile6.jpg" class="h-100 w-100">
                    </div>
                </div>
                
                <div data-role="tile" data-size="large" data-cover="<?php echo get_template_directory_uri(); ?>/lib/images/tiles/tile8.jpg" ></div>
            </div>
        </div>
        
        <!-- Contact From -->
        <div class="slides" id="contact">
            <h1>Contact Me</h1>
            <p>
                <iframe id="form" src="https://docs.google.com/forms/d/e/1FAIpQLSeJ9GHaX7N47Nto7-MtD7Akt8XAHseKHTbaT5l669-_WnnpuQ/viewform?embedded=true" width="640" height="896" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
            </p>
            <div class="socializer a sr-32px sr-opacity sr-icon-grey sr-bg-none sr-pad"><span class="sr-linkedin sr-text-in"><a href="https://www.linkedin.com/in/takumiminohara/" target="_blank" title="LinkedIn"><i class="fa fa-linkedin"></i><span class="text">LinkedIn</span></a></span><span class="sr-github sr-text-in"><a href="https://github.com/taky95" target="_blank" title="Github"><i class="fa fa-github"></i><span class="text">Github</span></a></span><span class="sr-email sr-text-in"><a href="mailto:takumi.minohara08@gmail.com" target="_blank" title="Email"><i class="fa fa-envelope"></i><span class="text">Email</span></a></span></div>
        </div>
        
        <!-- scroll button -->
        <div class="content">
            <div id="scrollTop">
                <a href="#">&#9650;</a>
            </div>
        </div> 
    </div><!-- End of Content -->     
    
    <!-- Footer -->
    <div id="copyright">
        <p>&copy;2018 Takumi</p>
    </div>
    
    <!-- scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/vendor/js/emergence.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/vendor/js/jquery.scrollTo.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/vendor/js/jquery.vide.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/vendor/js/lity.min.js"></script>
    
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/lib/js/separate.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/lib/js/parallax.js"></script>
    
    <script>
    /*global emergence*/
        emergence.init();
    </script>
</body>
</html>
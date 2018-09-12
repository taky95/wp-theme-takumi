<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=980">
    <title><?php bloginfo('name');?></title>
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/blog.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css">
    
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png" sizes="32x32">

    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:500,100|Amatic+SC|Fascinate" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Barlow|Barlow+Semi+Condensed|Bungee+Shade" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/vaakash/socializer/80391a50/css/socializer.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- nav -->
    <nav role="navigation">
        <div id="menuToggle">
            <input type="checkbox" />
            
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
            <img src="<?php echo get_template_directory_uri(); ?>/images/skillsets-min.png"/>
        </div>
    </div>
    
    <hr class="grow-start">
    
    <div id="content">
        <!-- About Me --> 
        <div class="slides" id="about">
            <h1>I am...</h1>
            <img id="bgImage" src="<?php echo get_template_directory_uri(); ?>/images/bg-glass.png"/>       
            <img id="profile" src="<?php echo get_template_directory_uri(); ?>/images/thumbs/profile1.jpg" />
            
            <div data-emergence="hidden" class="text-profile">
                a web developer, photographer, video editor, snowboarder, and traveller. My focus in coding is
                to create and provide the user-friendly, intuitive, and fun user experience. For most of the project
                I was involved in, I worked as front-end designing interfaces of the applications and websites. I also enjoy
                editing photos and videos, thus I love going to new places and shoot. Discovering different world I've never
                seen always helped me looking for a new angle to problems and that's what keeps me catering flexible solutions
                applicable to any unique situations. My comfortable coding languages are HTML/CSS, javascript, python, PHP, react and so on. 
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
            <h1>Stuff I was involved</h1>
            <!-- vertical table -->
            <table id="websites" class="table row-border">
                <!--img row-->
                <tr>
                    <td><img src="<?php echo get_template_directory_uri(); ?>/images/thumbs/screenshot.png"/ alt="img1"></td>
                    <td><img src="<?php echo get_template_directory_uri(); ?>/images/thumbs/thumb1.png"/ alt="img2"></td>
                    <td><img src="<?php echo get_template_directory_uri(); ?>/images/thumbs/screenshot2.png"/ alt="img3"></td>
                </tr>
                <!-- title -->
                <tr>
                    <td><a href="#">Simple Prallax Website</a></td>
                    <td><a href="#">Student Queue Project</a></td>
                    <td><a href="http://capstone.camosun.ca/archived-capstone/June2017/">Cap Stone Project</a></td>
                </tr>
                <!-- link -->
                <tr>
                    <td>
                        <button class="image-button light outline">
                            <span class="mif-github icon"></span>
                            <span class="caption"><a href="https://github.com/taky95/simple-parallax-website-template" target="_blank">Git Hub</a></span>
                        </button>
                    </td>
                    <td>
                        <button class="image-button light outline">
                            <span class="mif-github icon"></span>
                            <span class="caption"><a href="https://github.com/ARealHumanBean/student-queue-project" target="_blank">Git Hub</a></span>
                        </button>
                    </td>
                    <td>
                        <button class="image-button light outline">
                            <span class="mif-gitlab icon"></span>
                            <span class="caption"><a href="https://gitlab.com/camosunwebcommittee/tech-symposium" target="_blank">Git Lab</a></span>
                        </button>
                    </td> 
                </tr>
                <!-- description -->
                <tr>
                    <td><p>Parallax Web site template designed for simple use as introductory page for small business owners.</p></td>
                    <td><p>A web application developed to provide efficient support in communication between students and teachers. </p></td>
                    <td><p>Introductry page for capstone project 2017.</p></td>
                </tr>
            </table>
        </div>
        
        <!-- Videos & Photos -->
        <div class="slides" id="Videos">
            <h1>Video & Photo Editing</h1>
            <div class="tiles-grid size-2 size-lg-6">
                <div data-role="tile" data-size="large" data-cover="<?php echo get_template_directory_uri(); ?>/images/tiles/tile1.JPG" ></div>
                
                <div data-role="tile" data-size="large" class="bg-light" data-effect="hover-slide-down">
                    <div class="slide-front d-flex flex-justify-center flex-align-center p-4 ">
                        <span class="mif-infinite icon fg-dark"></span>
                    </div>
                    <div class="slide-back">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/tiles/tile5.jpg" class="h-100 w-100">
                    </div>
                </div>
                
                <div data-role="tile" data-size="large" data-cover="<?php echo get_template_directory_uri(); ?>/images/tiles/tile2.JPG" ></div>
            
                <div data-role="tile" data-size="large" class="bg-light" data-effect="hover-slide-left">
                    <div class="slide-front d-flex flex-justify-center flex-align-center p-4 ">
                        <span class="mif-cross icon fg-dark"></span>
                    </div>
                    <div class="slide-back">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/tiles/tile4.jpg" class="h-100 w-100">
                    </div>
                </div>
                
                <div data-role="tile" data-size="large" class="bg-light" style="width: 310px; height: 310px;"
                data-vide-bg="<?php echo get_template_directory_uri(); ?>/images/tiles/tile.mp4" >
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
                        <img src="<?php echo get_template_directory_uri(); ?>/images/tiles/tile3.jpg" class="h-100 w-100">
                    </div>
                </div>
                
                <div data-role="tile" data-size="large" data-cover="<?php echo get_template_directory_uri(); ?>/images/tiles/tile7.jpg" ></div>
                
                <div data-role="tile" data-size="large" class="bg-light" data-effect="hover-slide-up">
                    <div class="slide-front d-flex flex-justify-center flex-align-center p-4 ">
                        <span class="mif-checkmark icon fg-dark"></span>
                    </div>
                    <div class="slide-back">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/tiles/tile6.jpg" class="h-100 w-100">
                    </div>
                </div>
                
                <div data-role="tile" data-size="large" data-cover="<?php echo get_template_directory_uri(); ?>/images/tiles/tile9.jpg" ></div>
            </div>
        </div>
        
        <!-- Contact From -->
        <div class="slides" id="contact">
            <h1>Contact Me</h1>
            <p>
                <iframe id="form" src="https://docs.google.com/forms/d/e/1FAIpQLSeJ9GHaX7N47Nto7-MtD7Akt8XAHseKHTbaT5l669-_WnnpuQ/viewform?embedded=true" width="640" height="896" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
            </p>
            <div class="socializer a sr-32px sr-opacity sr-icon-grey sr-bg-none sr-pad"><span class="sr-linkedin sr-text-in"><a href="https://www.linkedin.com/in/takumiminohara/" target="_blank" title="LinkedIn"><i class="fa fa-linkedin"></i><span class="text">LinkedIn</span></a></span><span class="sr-googleplus sr-text-in"><a href="https://plus.google.com/116423591282612430207" target="_blank" title="Google Plus"><i class="fa fa-google-plus"></i><span class="text">Google Plus</span></a></span><span class="sr-github sr-text-in"><a href="https://github.com/taky95" target="_blank" title="Github"><i class="fa fa-github"></i><span class="text">Github</span></a></span><span class="sr-email sr-text-in"><a href="mailto:takumi.minohara08@gmail.com" target="_blank" title="Email"><i class="fa fa-envelope"></i><span class="text">Email</span></a></span></div>
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
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/emergence.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/separate.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/floating_text.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.scrollTo.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/parallax.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/Vide-master/dist/jquery.vide.min.js"></script>
    <script>
    /*global emergence*/
        emergence.init();
    </script>
</body>
</html>
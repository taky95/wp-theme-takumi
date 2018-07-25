<div id="menu">
    <ul>  
        <li><a href="<?php echo esc_url( home_url( '/' ) );?>">Home</a></li>
        <li><a href="<?php echo get_permalink( get_page_by_title("News") ); ?>">Blog</a></li>  
        <li><a href="<?php echo get_permalink( get_page_by_title("About") ); ?>">About Me</a></li>  
        <li><a href="<?php echo get_permalink( get_page_by_title("Picture") ); ?>">Pictures</a></li>  
        <li><a href="<?php echo get_permalink( get_page_by_title("Form") ); ?>">Contact</a></li>
    </ul>
</div>
<div id="menu">
    <ul>  
        <li><a href="<?php echo esc_url( home_url( '/' ) );?>">Home</a></li>  
        <li><a href="<?php echo get_permalink( get_page_by_title("About") ); ?>">About</a></li>  
        <li><a href="<?php echo get_permalink( get_page_by_title("Picture") ); ?>">Pictures</a></li>  
        <li><a href="<?php echo get_permalink( get_page_by_title("Form") ); ?>">Form</a></li>
    </ul>
</div>
<?php
    if ( function_exists('register_sidebar') )
        register_sidebar(array(
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '<h2 class="widget_title">',
            'after_title' => '</h2>',
        )
    );
    
    @ini_set( 'upload_max_size' , '64M' );
    @ini_set( 'post_max_size', '64M');
    @ini_set( 'max_execution_time', '300' );

    function wp34731_move_comment_field_to_bottom( $fields ) {
        $comment_field = $fields['comment'];
        unset( $fields['comment'] );
        $fields['comment'] = $comment_field;

        return $fields;
    }
    add_filter( 'comment_form_fields', 'wp34731_move_comment_field_to_bottom' );

    add_theme_support('post-thumbnails');

    function excerpt_readmore($more) {
        return '… <a href="'. get_permalink($post->ID) . '" class="readmore">' . 'Read More...' . '</a>';
    }
    add_filter('excerpt_more', 'excerpt_readmore');

    function add_theme_style(){
        wp_enqueue_style( 'style', get_stylesheet_uri() );
    }

    add_action( 'wp_enqueue_scripts', 'add_theme_style');
?>
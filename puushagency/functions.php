<?php 

function my_scripts_and_css()
{
    // REMOVE GUTENBERG CSS

    wp_dequeue_style ( 'wp-block-library' );
    wp_dequeue_style ( 'wp-block-library-theme' );
    wp_dequeue_style ( 'wc-blocks-style' );

    // MY STUFF

    if ( !is_admin() )
    {
        if ( is_page ( 'Contact' ) )
        {
            wp_enqueue_script ( 'main', get_stylesheet_directory_uri() . '/main.js', '', '', true );
        }

        wp_enqueue_style ( 'style', get_stylesheet_uri(), '/style/style.css', filemtime ( get_template_directory() . '/style/style.css' ) );        
    }
}

add_action ( 'wp_enqueue_scripts', 'my_scripts_and_css', 100 );



register_nav_menu ( 'header-menu', 'Cabecera del sitio' );


?>
<?php

add_action('wp_enqueue_scripts', 'enqueue_child_theme_styles');

function enqueue_child_theme_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');// charge le style du thème parent.
    wp_enqueue_style('child-style', get_stylesheet_uri(), array('parent-style'), filemtime(get_stylesheet_directory() . '/style.css'));
    // charge le style du thème enfant et utilise le paramètre filemtime pour ajouter une version basée sur la dernière modification du fichier thème enfant.
}
//Hook pour le lien admin//

function add_admin_link_to_menu( $items, $args ) {
    
    if ( is_user_logged_in() && $args->theme_location == 'menu-1' ) {
        
        $items .= '<li id="menu-item-admin" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-admin"><a href="' . admin_url() . '">Admin</a></li>';
       
    }

    return $items;
}

add_filter( 'wp_nav_menu_items', 'add_admin_link_to_menu', 10, 2 );


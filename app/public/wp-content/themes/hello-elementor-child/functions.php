<?php

add_action('wp_enqueue_scripts', 'enqueue_child_theme_styles');

function enqueue_child_theme_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');// charge le style du thème parent.
    wp_enqueue_style('child-style', get_stylesheet_uri(), array('parent-style'), filemtime(get_stylesheet_directory() . '/style.css'));
    // charge le style du thème enfant et utilise le paramètre filemtime pour ajouter une version basée sur la dernière modification du fichier thème enfant.
}

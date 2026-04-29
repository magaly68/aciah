<?php
/**
 * Charge la feuille de style du thème enfant
 */
function tt5_child_enqueue_styles() {
    wp_enqueue_style(
        'tt5-child-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'tt5_child_enqueue_styles');
<?php 
/**
 * Enqueue scripts and styles.
 * 
 */

$parentStyle = 'twentyseventeen-style';
/**
 * Undocumented function
 *
 * @return void
 */
function Twentyseventeenchild_Enqueue_styles(){
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/test.css');
}

add_action('wp_enqueue_scripts', 'Twentyseventeenchild_Enqueue_styles');


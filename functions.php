<?php 

function alanRivetPortfolio_script_enqueue(){
    wp_enqueue_style('customstyle-css', get_template_directory_uri() . '/css/Alan_Portfolio.css', array(), '1.0.0', 'all');
    wp_enqueue_script('custom.js', get_template_directory_uri() . '/js/Alan_Portfolio.js', array(), '1.0.0', true);
}

add_action( 'wp_enqueue_scripts', 'alanRivetPortfolio_script_enqueue');

function alanrivet_setup{
    add_theme_support('menus');
}
add_action('init', 'alanrivet_setup');

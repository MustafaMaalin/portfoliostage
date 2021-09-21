<?php
function mustafa_setup(){
// This theme uses wp_nav_menu() in one location.
    register_nav_menus(array(
        'primary' => esc_html__('Primary', 'mustafa'),
        'extra' => esc_html__('Extra', 'mustafa'),
        'footer' => esc_html__('Footer', 'mustafa'),
        'bottom-footer' => esc_html__('Bottom-Footer', 'mustafa'),
    ));
}

add_action( 'after_setup_theme', 'mustafa_setup' );

function mustafamaalin_register_styles(){
    wp_enqueue_style('mustafamaalin-stylesheet',get_template_directory_uri() . "/style.css", array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts','mustafamaalin_register_styles');
?>
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
    wp_enqueue_style('mustafamaalin-icon',get_template_directory_uri() . "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css", array(), '1.0', 'all');
}
function wpb_adding_scripts() {
    wp_register_script('navbar_script', get_template_directory_uri() . '/assets/js/navbar.js', array('javascript'),'1.1', true);
    wp_enqueue_script('navbar_script');
}


add_action('wp_enqueue_scripts','mustafamaalin_register_styles');
add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts', 999 );

?>
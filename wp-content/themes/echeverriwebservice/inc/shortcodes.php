<?php
/*
CTA
*/
function funct__cta(){
    require get_template_directory(). '/template-parts/shortcodes/cta.php';
    wp_enqueue_style('cta-css', get_template_directory_uri () . '/css/cta.css');
}

add_shortcode('cta','funct__cta');
/*
SERVICIOS
*/
function funct__servicios(){
    require get_template_directory(). '/template-parts/shortcodes/servicios.php';
    wp_enqueue_style('servicios-css', get_template_directory_uri () . '/css/servicios.css');
}

add_shortcode('servicios','funct__servicios');
/*
PORTFOLIO
*/
function funct__portfolio(){
    require get_template_directory(). '/template-parts/shortcodes/portfolio.php';
    wp_enqueue_style('portfolio-css', get_template_directory_uri () . '/css/portfolio.css');
}

add_shortcode('portfolio','funct__portfolio');
/*
BENEFICIOS
*/
function funct__beneficios(){
    require get_template_directory(). '/template-parts/shortcodes/beneficios.php';
    wp_enqueue_style('beneficios-css', get_template_directory_uri () . '/css/beneficios.css');
}

add_shortcode('beneficios','funct__beneficios');
/*
SOCIAL
*/
function funct__social(){
    require get_template_directory(). '/template-parts/shortcodes/social.php';
}

add_shortcode('social','funct__social');
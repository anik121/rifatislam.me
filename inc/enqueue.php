<?php
/*
 * @package mixpro
 * make it 14-12-1018
 * this template store all css and js file in this theme
 * */

function enqueue_css_js_func(){
    wp_enqueue_style('stylesheet',get_stylesheet_uri());
    wp_enqueue_style('awesomefont','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css',array(),'4.7.0','all');
    wp_enqueue_style('materialize','https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css',array(),null,'all');

//    these are script
    wp_enqueue_script('jQuery','https://code.jquery.com/jquery-3.2.1.min.js',array(),'3.2.1','true');
    wp_enqueue_script('isotope','https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js',array(),null,'true');
    wp_enqueue_script('materialize','https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js',array(),'100.2','true');
    wp_enqueue_script('barfiller',get_theme_file_uri('store/js/barfiller.js'),array(),null,'true');
    wp_enqueue_script('script',get_theme_file_uri('store/js/script.js'),array(),null,'true');
}


add_action('wp_enqueue_scripts','enqueue_css_js_func');
<?php

/*
Author: Jonathan Evans
URL: http://wwww.jontyjago.com

For some reason the Google fonts function that comes with Bones
just didn't work for me, so I use this one.
*/

function load_fonts() {
  wp_register_style( 'googleFonts', 'http://fonts.googleapis.com/css?family=Lato:400,700,400italic|Slabo+27px:400' );
  wp_enqueue_style( 'googleFonts' );
}

add_action( 'wp_print_styles', 'load_fonts' );
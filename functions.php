<?php

/*** Child Theme Function  ***/

if ( ! function_exists( 'topfit_mikado_child_enqueue_styles' ) ) {
    function topfit_mikado_child_enqueue_styles() {
        $parent_style = 'topfit-mikado-default-style';

        wp_enqueue_style( 'topfit-mikado-child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ) );
    }

    add_action( 'wp_enqueue_scripts', 'topfit_mikado_child_enqueue_styles' );
}
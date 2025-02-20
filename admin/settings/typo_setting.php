<?php

function wp_typo_settings(){
    /* Register Settings Body */ 
    register_setting('typo_options', 'body_font_family');
    register_setting('typo_options', 'body_font_size');
    register_setting('typo_options', 'body_line_height');
    register_setting('typo_options', 'body_font_weight');
    register_setting('typo_options', 'body_color');

    /* Register Settings H1 */ 
    register_setting('typo_options', 'h1_font_family');
    register_setting('typo_options', 'h1_font_size');
    register_setting('typo_options', 'h1_line_height');
    register_setting('typo_options', 'h1_font_weight');
    register_setting('typo_options', 'h1_color');
    
    /* Register Settings H2 */ 
    register_setting('typo_options', 'h2_font_family');
    register_setting('typo_options', 'h2_font_size');
    register_setting('typo_options', 'h2_line_height');
    register_setting('typo_options', 'h2_font_weight');
    register_setting('typo_options', 'h2_color');

    /* Register Settings H3 */ 
    register_setting('typo_options', 'h3_font_family');
    register_setting('typo_options', 'h3_font_size');
    register_setting('typo_options', 'h3_line_height');
    register_setting('typo_options', 'h3_font_weight');
    register_setting('typo_options', 'h3_color');

    /* Register Settings H4 */ 
    register_setting('typo_options', 'h4_font_family');
    register_setting('typo_options', 'h4_font_size');
    register_setting('typo_options', 'h4_line_height');
    register_setting('typo_options', 'h4_font_weight');
    register_setting('typo_options', 'h4_color');

    /* Register Settings H5 */ 
    register_setting('typo_options', 'h5_font_family');
    register_setting('typo_options', 'h5_font_size');
    register_setting('typo_options', 'h5_line_height');
    register_setting('typo_options', 'h5_font_weight');
    register_setting('typo_options', 'h5_color');

    /* Register Settings H6 */ 
    register_setting('typo_options', 'h6_font_family');
    register_setting('typo_options', 'h6_font_size');
    register_setting('typo_options', 'h6_line_height');
    register_setting('typo_options', 'h6_font_weight');
    register_setting('typo_options', 'h6_color');

    add_settings_section( 
        'typo_section', // $id:string,
        'Typography', // $title:string,
        null, // $callback:callable,
        'typo_options', // $page:string,
        // $args:array 
    );
}

add_action('admin_init', 'wp_typo_settings');
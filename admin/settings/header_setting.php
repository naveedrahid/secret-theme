<?php

function wp_header_settings(){
    register_setting('header_options', 'header_settings');
    add_settings_section(
        'header_section',
        'Select Header',
        null,
        'header_options'
    ); 
}

add_action('admin_init', 'wp_header_settings');
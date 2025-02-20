<?php

function wp_footer_settings()
{
    register_setting('footer_options', 'footer_settings');
    add_settings_section(
        'footer_section',
        'Select Footer',
        null,
        'footer_options'
    );
}

add_action('admin_init', 'wp_footer_settings');
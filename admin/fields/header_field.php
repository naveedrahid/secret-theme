<?php

function header_template_style()
{
    add_settings_field(
        'header_style', //$id:string
        'Header Style', // $title:string
        'header_template_callback', // $callback:callable
        'header_options', // $page:string
        'header_section', // $section:string
    );
}

add_action('admin_init', 'header_template_style');

function header_template_callback()
{
    $get_option = get_option('header_settings');
    $header_template = isset($get_option['header_style']) ? $get_option['header_style'] : '';

?>
    <div class="header_options">
        <p>Default Header</p>
        <label>
            <input type="radio" name="header_settings[header_style]" value="null" <?php checked($header_template, 'null') ?>>
            <img src="<?php echo get_template_directory_uri(); ?>/admin/img/default.jpg" alt="">
        </label>
        <p>Header 1</p>

        <label>
            <input type="radio" name="header_settings[header_style]" value="header1" <?php checked($header_template, 'header1') ?>>
            <img src="<?php echo get_template_directory_uri(); ?>/admin/img/default.jpg" alt="">
        </label>
        <p>Header 2</p>

        <label>
            <input type="radio" name="header_settings[header_style]" value="header2" <?php checked($header_template, 'header2') ?>>
            <img src="<?php echo get_template_directory_uri(); ?>/admin/img/default.jpg" alt="">
        </label>
        <p>Header 3</p>

        <label>
            <input type="radio" name="header_settings[header_style]" value="header3" <?php checked($header_template, 'header3') ?>>
            <img src="<?php echo get_template_directory_uri(); ?>/admin/img/default.jpg" alt="">
        </label>
    </div>
<?php
}

function header_template_css()
{ ?>
    <style>
        .header_options label {
            position: relative;
            display: block;
        }

        .header_options input[type="radio"]:checked {
            border: 5px solid #007bff;
        }

        .header_options input[type="radio"] {
            position: absolute;
            appearance: none;
            width: 100%;
            min-height: 100%;
            border: 5px solid #fff;
            border-radius: 0;
            cursor: pointer;
            background: transparent;
            left: auto;
            top: 0;
            bottom: 0;
            right: 0;
            margin: 0 !important;
            padding: 0 !important;
        }

        .header_options img {
            width: 100%;
            height: 100%;
        }

        .header_options input[type="radio"]:checked::before {
            background-color: transparent;
        }
    </style>
<?php
}

add_action('admin_head', 'header_template_css');
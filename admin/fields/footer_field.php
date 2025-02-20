<?php

function footer_template_callback()
{
    $get_option = get_option('footer_settings');
    $footer_template = isset($get_option['footer_style']) ? $get_option['footer_style'] : '';

?>
    <div class="footerOptions">
        <p>Default Footer</p>
        <label>
            <input type="radio" name="footer_settings[footer_style]" value="null" <?php checked($footer_template, 'null'); ?>>
            <img src="<?php echo get_template_directory_uri(); ?>/admin/img/default.jpg; ?>" alt="">
        </label>
        <p>Footer 1</p>
        <label>
            <input type="radio" name="footer_settings[footer_style]" value="footer1" <?php checked($footer_template, 'footer1'); ?>>
            <img src="<?php echo get_template_directory_uri(); ?>/admin/img/default.jpg; ?>" alt="">
        </label>
        <p>Footer 2</p>
        <label>
            <input type="radio" name="footer_settings[footer_style]" value="footer2" <?php checked($footer_template, 'footer2'); ?>>
            <img src="<?php echo get_template_directory_uri(); ?>/admin/img/default.jpg; ?>" alt="">
        </label>
        <p>Footer 3</p>
        <label>
            <input type="radio" name="footer_settings[footer_style]" value="footer3" <?php checked($footer_template, 'footer3'); ?>>
            <img src="<?php echo get_template_directory_uri(); ?>/admin/img/default.jpg; ?>" alt="">
        </label>
    </div>
<?php
}

function footer_template_style()
{
    add_settings_field(
        'footer_style',
        'Footer Style',
        'footer_template_callback',
        'footer_options',
        'footer_section'
    );
}

add_action('admin_init', 'footer_template_style');

function footer_template_css()
{ ?>
    <style>
        .footerOptions label {
            position: relative;
            display: block;
        }

        .footerOptions input[type="radio"]:checked {
            border: 5px solid #007bff;
        }

        .footerOptions input[type="radio"] {
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

        .footerOptions img {
            width: 100%;
            height: 100%;
        }

        .footerOptions input[type="radio"]:checked::before {
            background-color: transparent;
        }
    </style>
<?php }

add_action('admin_head', 'footer_template_css');

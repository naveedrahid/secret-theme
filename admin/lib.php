<?php

function sct_theme_options(){
    add_menu_page(
    'Theme Options',
    'Theme Settings',
    'manage_options',
    'theme-options',
    'sct_theme_option_callback',
    'dashicons-screenoptions'
    );
}

// add_action('admin_menu', 'sct_theme_options');

function sct_theme_option_callback(){
    if (!current_user_can('manage_options')) {
        return;
    }

    $active_tab = isset($_GET['tab']) ? $_GET['tab'] : 'settings';
    ?>
    <div class="wrap">
        <h1>Theme Options</h1>
        <div class="nav-tab-wrapper">
            <a href="?page=theme-options&tab=settings" class="nav-tab <?php echo $active_tab == 'settings' ? 'nav-tab-active': ''; ?>">Settings</a>
            <a href="?page=theme-options&tab=color" class="nav-tab <?php echo $active_tab == 'color' ? 'nav-tab-active': ''; ?>">Color Scheme</a>
            <a href="?page=theme-options&tab=header" class="nav-tab <?php echo $active_tab == 'header' ? 'nav-tab-active': ''; ?>">Header</a>
            <a href="?page=theme-options&tab=footer" class="nav-tab <?php echo $active_tab == 'footer' ? 'nav-tab-active': ''; ?>">Footer</a>
            <a href="?page=theme-options&tab=typography" class="nav-tab <?php echo $active_tab == 'typography' ? 'nav-tab-active' : '' ?>">Typography</a>
        </div>
        <form action="options.php" method="post">
            <?php

                if ($active_tab == 'settings') {
                    settings_fields('settings_options');
                    do_settings_sections('settings_options');
                }elseif($active_tab == 'color'){
                    settings_fields('color_options');
                    do_settings_sections('color_options');
                }elseif ($active_tab == 'header') {
                    settings_fields('header_options');
                    do_settings_sections('header_options', 'header_section');
                }elseif ($active_tab == 'footer') {
                    settings_fields('footer_options');
                    do_settings_sections('footer_options', 'footer_section');
                }elseif($active_tab == 'typography'){
                    settings_fields( 'typo_options' );
                    do_settings_fields( 'typo_options' , 'typo_section');
                }
                submit_button();
            ?>
        </form>
    </div>
    <?php
}

// require_once get_template_directory() . '/admin/constant.php';
$admin_constants = require get_template_directory() . '/admin/constant.php';
foreach ($admin_constants as $file) {
    if (file_exists($file)) {
        require_once $file;
    }
}
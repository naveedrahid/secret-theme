<?php

function wp_typo_fields()
{
    add_settings_field(
        'typo_id', // $id:string
        '<h3>Typography</h3>', // $title:string
        'typography_callback', // $callback:callable
        'typo_options', // $page:string
        'typo_section', // $section:string
    );
}

add_action('admin_init', 'wp_typo_fields');

function get_google_fonts()
{
    return [
        'Roboto' => 'Roboto',
        'Open Sans' => 'Open Sans',
        'Lato' => 'Lato',
        'Montserrat' => 'Montserrat',
    ];
}

function typography_callback()
{
    $google_fonts = get_google_fonts();
    /* Body typography */ 
    
    $body_font_family = get_option('body_font_family', 'Roboto');
    $body_font_size = get_option('body_font_size', '16px');
    $body_line_height = get_option('body_line_height', '20px');
    $body_font_weight = (int) get_option('body_font_weight', '400');
    $body_color = get_option('body_color', '#000000');
    
    /* Body typography End */
    
    /* H1 typography */ 
    
    $selected_h1_font_family = get_option('h1_font_family', 'Roboto');
    $selected_h1_font_size = get_option('h1_font_size', '16px');
    $selected_h1_line_height = get_option('h1_line_height', '16px');
    $selected_h1_font_weight = (int) get_option('h1_font_weight', '500');
    $h1_color = get_option('h1_color', '#000000');
    
    /* H1 typography End */
    
    /* H2 typography */ 
    
    $selected_h2_font_family = get_option('h2_font_family', 'Roboto');
    $selected_h2_font_size = get_option('h2_font_size', '16px');
    $selected_h2_line_height = get_option('h2_line_height', '16px');
    $selected_h2_font_weight = (int) get_option('h2_font_weight', '500');
    $h2_color = get_option('h2_color', '#000000');
    
    /* H2 typography End */ 
    
    /* H3 typography */ 
    
    $selected_h3_font_family = get_option('h3_font_family', 'Roboto');
    $selected_h3_font_size = get_option('h3_font_size', '16px');
    $selected_h3_line_height = get_option('h3_line_height', '16px');
    $selected_h3_font_weight = (int) get_option('h3_font_weight', '500');
    $h3_color = get_option('h3_color', '#000000');
    
    /* H3 typography End */ 
    
    /* H4 typography */ 
    
    $selected_h4_font_family = get_option('h4_font_family', 'Roboto');
    $selected_h4_font_size = get_option('h4_font_size', '16px');
    $selected_h4_line_height = get_option('h4_line_height', '16px');
    $selected_h4_font_weight = (int) get_option('h4_font_weight', '500');
    $h4_color = get_option('h4_color', '#000000');
    
    /* H4 typography End */ 
    
    /* H5 typography */ 
    
    $selected_h5_font_family = get_option('h5_font_family', 'Roboto');
    $selected_h5_font_size = get_option('h5_font_size', '16px');
    $selected_h5_line_height = get_option('h5_line_height', '16px');
    $selected_h5_font_weight = (int) get_option('h5_font_weight', '500');
    $h5_color = get_option('h5_color', '#000000');
    
    /* H5 typography End */ 
    
    /* H6 typography */ 
    
    $selected_h6_font_family = get_option('h6_font_family', 'Roboto');
    $selected_h6_font_size = get_option('h6_font_size', '16px');
    $selected_h6_line_height = get_option('h6_line_height', '16px');
    $selected_h6_font_weight = (int) get_option('h6_font_weight', '500');
    $h6_color = get_option('h6_color', '#000000');
    
    /* H6 typography End */ 
?>
    <div class="wrap" style="width: 40%;">
        <h2>Body Typography</h2>
        <div class="typography-flex">
            <div class="typography-col">
                <h4>Font Family:</h4>
            </div>
            <div class="typography-col">
                <select name="body_font_family">
                    <?php
                    foreach ($google_fonts as $value => $label) {
                        $selected = ($body_font_family === $value) ? 'selected' : '';
                        echo "<option value=\"{$value}\" {$selected}>{$label}</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="typography-flex">
            <div class="typography-col">
                <h4>Font Size:</h4>
            </div>
            <div class="typography-col">
                <input type="text" name="body_font_size" value="<?php echo esc_attr($body_font_size); ?>">
            </div>
        </div>
        <div class="typography-flex">
            <div class="typography-col">
                <h4>Font Line Height:</h4>
            </div>
            <div class="typography-col">
                <input type="text" name="body_line_height" value="<?php echo esc_attr($body_line_height); ?>">
            </div>
        </div>
        <div class="typography-flex">
            <div class="typography-col">
                <h4>Font Weight:</h4>
            </div>
            <div class="typography-col">
                <select name="body_font_weight">
                    <?php
                    for ($i = 100; $i <= 900; $i += 100) {
                        $selected = ($body_font_weight === $i) ? 'selected' : '';
                        echo "<option value=\"{$i}\" {$selected}>{$i}</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="typography-flex">
            <div class="typography-col">
                <h4>Color:</h4>
            </div>
            <div class="typography-col">
                <input type="color" name="body_color" value="<?php echo esc_attr($body_color); ?>">
            </div>
        </div>
    </div>

    <div class="wrap" style="width: 40%;">
        <h2>H1 Typography</h2>
        <div class="typography-flex">
            <div class="typography-col">
                <h4>Font Family:</h4>
            </div>
            <div class="typography-col">
                <select name="h1_font_family">
                    <?php
                    foreach ($google_fonts as $value => $label) {
                        $selected = ($selected_h1_font_family === $value) ? 'selected' : '';
                        echo "<option value=\"{$value}\" {$selected}>{$label}</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="typography-flex">
            <div class="typography-col">
                <h4>Font Size:</h4>
            </div>
            <div class="typography-col">
                <input type="text" name="h1_font_size" value="<?php echo esc_attr($selected_h1_font_size); ?>">
            </div>
        </div>
        <div class="typography-flex">
            <div class="typography-col">
                <h4>Font Line Height:</h4>
            </div>
            <div class="typography-col">
                <input type="text" name="h1_line_height" value="<?php echo esc_attr($selected_h1_line_height); ?>">
            </div>
        </div>
        <div class="typography-flex">
            <div class="typography-col">
                <h4>Font Weight:</h4>
            </div>
            <div class="typography-col">
                <select name="h1_font_weight">
                    <?php
                    for ($i = 100; $i <= 900; $i += 100) {
                        $selected = ($selected_h1_font_weight === $i) ? 'selected' : '';
                        echo "<option value=\"{$i}\" {$selected}>{$i}</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="typography-flex">
            <div class="typography-col">
                <h4>Color:</h4>
            </div>
            <div class="typography-col">
                <input type="color" name="h1_color" value="<?php echo esc_attr($h1_color); ?>">
            </div>
        </div>
    </div>
    
    <div class="wrap" style="width: 40%;">
        <h2>H2 Typography</h2>
        <div class="typography-flex">
            <div class="typography-col">
                <h4>Font Family:</h4>
            </div>
            <div class="typography-col">
                <select name="h2_font_family">
                    <?php
                    foreach ($google_fonts as $value => $label) {
                        $selected = ($selected_h2_font_family === $value) ? 'selected' : '';
                        echo "<option value=\"{$value}\" {$selected}>{$label}</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="typography-flex">
            <div class="typography-col">
                <h4>Font Size:</h4>
            </div>
            <div class="typography-col">
                <input type="text" name="h2_font_size" value="<?php echo esc_attr($selected_h2_font_size); ?>">
            </div>
        </div>
        <div class="typography-flex">
            <div class="typography-col">
                <h4>Font Line Height:</h4>
            </div>
            <div class="typography-col">
                <input type="text" name="h2_line_height" value="<?php echo esc_attr($selected_h2_line_height); ?>">
            </div>
        </div>
        <div class="typography-flex">
            <div class="typography-col">
                <h4>Font Weight:</h4>
            </div>
            <div class="typography-col">
                <select name="h2_font_weight">
                    <?php
                    for ($i = 100; $i <= 900; $i += 100) {
                        $selected = ($selected_h2_font_weight === $i) ? 'selected' : '';
                        echo "<option value=\"{$i}\" {$selected}>{$i}</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="typography-flex">
            <div class="typography-col">
                <h4>Color:</h4>
            </div>
            <div class="typography-col">
                <input type="color" name="h2_color" value="<?php echo esc_attr($h2_color); ?>">
            </div>
        </div>
    </div>

    <div class="wrap" style="width: 40%;">
        <h2>H3 Typography</h2>
        <div class="typography-flex">
            <div class="typography-col">
                <h4>Font Family:</h4>
            </div>
            <div class="typography-col">
                <select name="h3_font_family">
                    <?php
                    foreach ($google_fonts as $value => $label) {
                        $selected = ($selected_h3_font_family === $value) ? 'selected' : '';
                        echo "<option value=\"{$value}\" {$selected}>{$label}</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="typography-flex">
            <div class="typography-col">
                <h4>Font Size:</h4>
            </div>
            <div class="typography-col">
                <input type="text" name="h3_font_size" value="<?php echo esc_attr($selected_h3_font_size); ?>">
            </div>
        </div>
        <div class="typography-flex">
            <div class="typography-col">
                <h4>Font Line Height:</h4>
            </div>
            <div class="typography-col">
                <input type="text" name="h3_line_height" value="<?php echo esc_attr($selected_h3_line_height); ?>">
            </div>
        </div>
        <div class="typography-flex">
            <div class="typography-col">
                <h4>Font Weight:</h4>
            </div>
            <div class="typography-col">
                <select name="h3_font_weight">
                    <?php
                    for ($i = 100; $i <= 900; $i += 100) {
                        $selected = ($selected_h3_font_weight === $i) ? 'selected' : '';
                        echo "<option value=\"{$i}\" {$selected}>{$i}</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="typography-flex">
            <div class="typography-col">
                <h4>Color:</h4>
            </div>
            <div class="typography-col">
                <input type="color" name="h3_color" value="<?php echo esc_attr($h3_color); ?>">
            </div>
        </div>
    </div>

    <div class="wrap" style="width: 40%;">
        <h2>H4 Typography</h2>
        <div class="typography-flex">
            <div class="typography-col">
                <h4>Font Family:</h4>
            </div>
            <div class="typography-col">
                <select name="h4_font_family">
                    <?php
                    foreach ($google_fonts as $value => $label) {
                        $selected = ($selected_h4_font_family === $value) ? 'selected' : '';
                        echo "<option value=\"{$value}\" {$selected}>{$label}</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="typography-flex">
            <div class="typography-col">
                <h4>Font Size:</h4>
            </div>
            <div class="typography-col">
                <input type="text" name="h4_font_size" value="<?php echo esc_attr($selected_h4_font_size); ?>">
            </div>
        </div>
        <div class="typography-flex">
            <div class="typography-col">
                <h4>Font Line Height:</h4>
            </div>
            <div class="typography-col">
                <input type="text" name="h4_line_height" value="<?php echo esc_attr($selected_h4_line_height); ?>">
            </div>
        </div>
        <div class="typography-flex">
            <div class="typography-col">
                <h4>Font Weight:</h4>
            </div>
            <div class="typography-col">
                <select name="h4_font_weight">
                    <?php
                    for ($i = 100; $i <= 900; $i += 100) {
                        $selected = ($selected_h4_font_weight === $i) ? 'selected' : '';
                        echo "<option value=\"{$i}\" {$selected}>{$i}</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="typography-flex">
            <div class="typography-col">
                <h4>Color:</h4>
            </div>
            <div class="typography-col">
                <input type="color" name="h4_color" value="<?php echo esc_attr($h4_color); ?>">
            </div>
        </div>
    </div>

    <div class="wrap" style="width: 40%;">
        <h2>H5 Typography</h2>
        <div class="typography-flex">
            <div class="typography-col">
                <h4>Font Family:</h4>
            </div>
            <div class="typography-col">
                <select name="h5_font_family">
                    <?php
                    foreach ($google_fonts as $value => $label) {
                        $selected = ($selected_h5_font_family === $value) ? 'selected' : '';
                        echo "<option value=\"{$value}\" {$selected}>{$label}</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="typography-flex">
            <div class="typography-col">
                <h4>Font Size:</h4>
            </div>
            <div class="typography-col">
                <input type="text" name="h5_font_size" value="<?php echo esc_attr($selected_h5_font_size); ?>">
            </div>
        </div>
        <div class="typography-flex">
            <div class="typography-col">
                <h4>Font Line Height:</h4>
            </div>
            <div class="typography-col">
                <input type="text" name="h5_line_height" value="<?php echo esc_attr($selected_h5_line_height); ?>">
            </div>
        </div>
        <div class="typography-flex">
            <div class="typography-col">
                <h4>Font Weight:</h4>
            </div>
            <div class="typography-col">
                <select name="h5_font_weight">
                    <?php
                    for ($i = 100; $i <= 900; $i += 100) {
                        $selected = ($selected_h5_font_weight === $i) ? 'selected' : '';
                        echo "<option value=\"{$i}\" {$selected}>{$i}</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="typography-flex">
            <div class="typography-col">
                <h4>Color:</h4>
            </div>
            <div class="typography-col">
                <input type="color" name="h5_color" value="<?php echo esc_attr($h5_color); ?>">
            </div>
        </div>
    </div>

    <div class="wrap" style="width: 40%;">
        <h2>H6 Typography</h2>
        <div class="typography-flex">
            <div class="typography-col">
                <h4>Font Family:</h4>
            </div>
            <div class="typography-col">
                <select name="h6_font_family">
                    <?php
                    foreach ($google_fonts as $value => $label) {
                        $selected = ($selected_h6_font_family === $value) ? 'selected' : '';
                        echo "<option value=\"{$value}\" {$selected}>{$label}</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="typography-flex">
            <div class="typography-col">
                <h4>Font Size:</h4>
            </div>
            <div class="typography-col">
                <input type="text" name="h6_font_size" value="<?php echo esc_attr($selected_h6_font_size); ?>">
            </div>
        </div>
        <div class="typography-flex">
            <div class="typography-col">
                <h4>Font Line Height:</h4>
            </div>
            <div class="typography-col">
                <input type="text" name="h6_line_height" value="<?php echo esc_attr($selected_h6_line_height); ?>">
            </div>
        </div>
        <div class="typography-flex">
            <div class="typography-col">
                <h4>Font Weight:</h4>
            </div>
            <div class="typography-col">
                <select name="h6_font_weight">
                    <?php
                    for ($i = 100; $i <= 900; $i += 100) {
                        $selected = ($selected_h6_font_weight === $i) ? 'selected' : '';
                        echo "<option value=\"{$i}\" {$selected}>{$i}</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="typography-flex">
            <div class="typography-col">
                <h4>Color:</h4>
            </div>
            <div class="typography-col">
                <input type="color" name="h6_color" value="<?php echo esc_attr($h6_color); ?>">
            </div>
        </div>
    </div>
<?php
}

function typography_css()
{
?>
    <style>
        .typography-flex {
            display: flex;
            align-items: center;
        }

        .typography-flex>* {
            flex: 1;
            margin-right: 10px;
        }
    </style>
<?php
}

add_action('admin_head', 'typography_css');

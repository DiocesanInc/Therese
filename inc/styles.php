<?php

// setErrorNotice("test");
// setErrorNotice(filemtime(get_template_directory_uri() . "/style.css"));


function getCustomStylesFilename()
{
    $blog_id = get_current_blog_id();
    return "evoli_$blog_id-custom-variables";
}

function evoliStyles()
{
    /**
     * Slick
     */
    $file = get_template_directory_uri() . "/assets/slick-slider/slick.css";
    wp_enqueue_style('slick-styles', $file, array(), "1.8.1", "screen");
    $file = get_template_directory_uri() . "/assets/slick-slider/slick-theme.css";
    wp_enqueue_style('slick-theme', $file, array(), "1.8.1", "screen");
    /**
     * Font Awesome
     */
    $file = "https://use.fontawesome.com/releases/v5.7.2/css/all.css";
    wp_enqueue_style('font-awesome', $file, array(), "5.7.2", "screen");

    /**
     * Style.css
     */
    $file_url = get_template_directory_uri() . "/style.css";
    $file = get_template_directory() . "/style.css";
    $hash = filemtime($file);
    wp_enqueue_style('main-styles', $file_url, array(), $hash, "screen");

    /**
     * Ministry Lightbox Contact Form Styles
     */
    wp_enqueue_style(
        "ministryContactForm",
        get_template_directory_uri() . "/assets/css/ministry-contact-form.css",
        array(),
        "1",
        "screen"
    );

    /**
     * Envira Styles
     */
    wp_enqueue_style(
        "envira",
        get_template_directory_uri() . "/assets/css/envira.css",
        array(),
        "1",
        "screen"
    );

    /**
     * custom emergency alert
     */
    wp_enqueue_style(
        "dpi-emergency-alert",
        get_template_directory_uri() . "/assets/css/emergency-alert.css",
        array(),
        "1",
        "screen"
    );
}

add_action('wp_enqueue_scripts', 'evoliStyles');

add_action(
    "acf/save_post",
    function () {
        if (acfIsInstalled()) {
            include_once get_template_directory() . "/assets/scss/custom/variables/custom-variables.php";
        }
    }
);

if (!function_exists("includeCustomVariables")) {
    function includeCustomVariables()
    {
        $filename = getCustomStylesFilename();
        if (class_exists("CssHelper") && file_exists(WP_PLUGIN_DIR . "/css-helper/$filename.css")) {
            \CssHelper::enqueueCssFile($filename);
        } else {
            $filepath = get_template_directory_uri() . "/$filename.css";
            wp_enqueue_style("theme-variables", $filepath, array(), filemtime($filepath), "screen");
        }
    }
    add_action('wp_enqueue_scripts', 'includeCustomVariables');
}



function addEditorStylesThemeSupport()
{
    add_theme_support('editor-styles');
}

function addEditorStyles()
{

    if (class_exists("CssHelper") && file_exists(WP_PLUGIN_DIR . "/css-helper/evoli-custom-variables.css")) {
        add_editor_style("../../plugins/css-helper/evoli-custom-variables.css");
    } else {

        add_editor_style(get_template_directory_uri() . '/custom-variables.css');
    }

    add_editor_style(get_template_directory_uri() . '/assets/scss/backend-styles/editor.css');
}

add_action('after_setup_theme', "addEditorStylesThemeSupport");
add_action('admin_init', "addEditorStyles");
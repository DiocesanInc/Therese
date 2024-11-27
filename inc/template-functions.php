<?php

/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Evoli
 */



if (!function_exists("getClasses")) {
    function getClasses($classes)
    {
        return $classes !== null ? "class='$classes'" : "";
    }
}

if (!function_exists('phoneLink')) {
    /**
     * Convert phone numbers into links.
     *
     * @param string $input.
     * @return string $output.
     */
    function phoneLink($input, $a_tag = false, $classes = null)
    {
        $tel = preg_replace('/[^0-9]+/', '', $input);
        $output = "tel:+1-" . substr($tel, 0, 3) . "-" . substr($tel, 3, 3) . "-" . substr($tel, 6, 4);
        if (strlen($tel) > 10) $output .= "," . substr($tel, 10);

        if ($a_tag) {
            $classes = getClasses($classes);
            $output = "<a $classes href=$output>$input</a>";
        }

        return $output;
    }
}

if (!function_exists("emailLink")) {
    function emailLink($email, $text = "Email Me", $classes = null)
    {
        $classes = getClasses($classes);
        return "<a $classes href='mailto: $email'>$text</a>";
    }
}

if (!function_exists('acfLink')) {
    /**
     * Create simple links from ACF Link Array.
     *
     * @param string $link    the href for the a tag
     * @param string $class   css classes for the a tag
     * @param string $content content between the opening and closing tag
     * @param bool   $button  make the a tag a button tag instead
     *
     * @return string
     */
    function acfLink($link, $class = null, $content = null, $button = null)
    {
        if ($link) {
            $tag = $button ? "button" : "a";
            $url = is_array($link) && $link['url'] ? $link['url'] : $link;
            $target = is_array($link) && $link["target"] ? $link['target'] : '';
            $title = is_array($link) ? ($link['title'] !== "" ? $link["title"] : "Read more") : $link;

            $className = $class ? " class=\"$class\"" : '';
            $content = $content ? $content : $title;

            return "<$tag href=\"$url\"$className target=\"$target\" title=\"$title\">$content</$tag>";
        }
    }
}

if (!function_exists("getField")) {
    /**
     * Adds fallback value to get_field().
     *
     * Calls get_field() and either returns it if it has a value or returns the passed default value
     *
     * @param [type] $selector
     * @param boolean $post_id
     * @param boolean $format_value
     * @param [type] $default_value
     * @return void
     */
    function getField($selector, $post_id = false, $format_value = true, $default_value = null)
    {
        return get_field($selector, $post_id, $format_value) && get_field($selector, $post_id, $format_value) !== "" ? get_field($selector, $post_id, $format_value) : $default_value;
    }
}

if (!function_exists("add_search_form")) {
    function add_search_form($items, $args)
    {
        if ($args->theme_location == 'menu-1') {
            ob_start();
            get_template_part("template-parts/headers/search-form-desktop");
            $search_desktop = ob_get_contents();
            ob_end_clean();

            ob_start();
            get_template_part("template-parts/headers/search-form-mobile");
            $search_mobile = ob_get_contents();
            ob_end_clean();

            ob_start();
            get_template_part("template-parts/headers/close-mobile");
            $close_mobile = ob_get_contents();
            ob_end_clean();

            $items = $search_mobile . $close_mobile . $items . $search_desktop;
        }
        return $items;
    }
    add_filter('wp_nav_menu_items', 'add_search_form', 10, 2);
}

// if (!function_exists("add_search_form2")) {
//     function add_search_form2($items, $args)
//     {
//         if ($args->theme_location == 'quicklinks') {
//             ob_start();
//             get_template_part("template-parts/headers/search-form-desktop");
//             $search_desktop = ob_get_contents();
//             ob_end_clean();
//
//             ob_start();
//             get_template_part("template-parts/headers/search-form-mobile");
//             $search_mobile = ob_get_contents();
//             ob_end_clean();
//
//             $items = $search_mobile . $items . $search_desktop;
//         }
//         return $items;
//     }
//     add_filter('wp_nav_menu_items', 'add_search_form2', 10, 2);
// }

add_filter("post_thumbnail_html", "defaultPostThumbnail", 20, 5);

function defaultPostThumbnail($html, $post_id, $post_thumbnail_id, $size, $attr)
{
    if (!empty($html)) return $html;
    if (getDefaultFeaturedImage()) {
        return "<img src=" . getDefaultFeaturedImage(true) . " />";
    }
    return theDefaultPostThumbnail($html, $post_id, $post_thumbnail_id, $size, $attr);
}

function theDefaultPostThumbnail($html = null, $post_id = null, $post_thumbnail_id = null, $size = "thumbnail", $attr = null)
{
    echo "<img src=" . get_template_directory_uri() . "/assets/img/150_X_150.png" . " />";
    return;
}


function getMinistryPostObject()
{
    return get_field("ministries", "options")["ministry_groups_back_button"];
}

if (!function_exists("my_form_submit_button")) {
    function my_form_submit_button($button, $form)
    {
        $fragment = WP_HTML_Processor::create_fragment($button);
        $fragment->next_token();
        $fragment->add_class('the-button');

        return $fragment->get_updated_html();
    }
    add_filter('gform_submit_button', 'my_form_submit_button', 10, 2);
}

if (!function_exists('acf_link')) {
    /**
     * Create simple links from ACF Link Array.
     *
     * @param string $link    the href for the a tag
     * @param string $class   css classes for the a tag
     * @param string $content content between the opening and closing tag
     * @param bool   $button  make the a tag a button tag instead
     *
     * @return string
     */
    function acf_link($link, $class = null, $content = null, $button = null)
    {
        if ($link) {
            $tag = $button ? "button" : "a";
            $url = is_array($link) && $link['url'] ? $link['url'] : $link;
            $target = is_array($link) && $link["target"] ? $link['target'] : '';
            $title = is_array($link) ? ($link['title'] !== "" ? $link["title"] : "Read more") : $link;

            $className = $class ? " class=\"$class\"" : '';
            $content = $content ? $content : $title;

            return "<$tag href=\"$url\"$className target=\"$target\" title=\"$title\">$content</$tag>";
        }
    }
}

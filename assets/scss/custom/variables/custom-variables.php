<?php

$filename = getCustomStylesFilename();

$variables = new CssHelper([], $filename, false);

/**
 * THEME COLORS
 */
$variables->addCssRule(
    ":root",
    array(
        "--clr-primary" => get_field("primary_color", "options")["color"],
        "--clr-secondary" => get_field("secondary_color", "options")["color"],
        "--clr-tertiary" => get_field("tertiary_color", "options")["color"],
        "--clr-quaternary" => get_field("quaternary_color", "options")["color"],
    )
);

$variables->addCssRule(
    ".has-primary-color-after::after",
    array("color" => get_field("primary_color", "options")["color"])
);
$variables->addCssRule(
    ".has-primary-color-before::before",
    array("color" => get_field("primary_color", "options")["color"])
);
$variables->addCssRule(
    ".has-primary-background-color-after::after",
    array("background-color" => get_field("primary_color", "options")["color"])
);
$variables->addCssRule(
    ".has-primary-background-color-before::before",
    array("background-color" => get_field("primary_color", "options")["color"])
);
$variables->addCssRule(
    ".has-secondary-color-after::after",
    array("color" => get_field("secondary_color", "options")["color"])
);
$variables->addCssRule(
    ".has-secondary-color-before::before",
    array("color" => get_field("secondary_color", "options")["color"])
);
$variables->addCssRule(
    ".has-secondary-background-color-after::after",
    array("background-color" => get_field("secondary_color", "options")["color"])
);
$variables->addCssRule(
    ".has-secondary-background-color-before::before",
    array("background-color" => get_field("secondary_color", "options")["color"])
);
$variables->addCssRule(
    ".has-tertiary-color-after::after",
    array("color" => get_field("tertiary_color", "options")["color"])
);
$variables->addCssRule(
    ".has-tertiary-color-before::before",
    array("color" => get_field("tertiary_color", "options")["color"])
);
$variables->addCssRule(
    ".has-tertiary-background-color-after::after",
    array("background-color" => get_field("tertiary_color", "options")["color"])
);
$variables->addCssRule(
    ".has-tertiary-background-color-before::before",
    array("background-color" => get_field("tertiary_color", "options")["color"])
);
$variables->addCssRule(
    ".has-quaternary-color-after::after",
    array("color" => get_field("quaternary_color", "options")["color"])
);
$variables->addCssRule(
    ".has-quaternary-color-before::before",
    array("color" => get_field("quaternary_color", "options")["color"])
);
$variables->addCssRule(
    ".has-quaternary-background-color-after::after",
    array("background-color" => get_field("quaternary_color", "options")["color"])
);
$variables->addCssRule(
    ".has-quaternary-background-color-before::before",
    array("background-color" => get_field("quaternary_color", "options")["color"])
);

if (get_field("primary_color", "options")["is_gradient"]) {
    $variables->addCssRule(
        ":root",
        array(
            "--clr-primary-2" => get_field("primary_color", "options")["color_2"]
        )
    );
}

if (get_field("secondary_color", "options")["is_gradient"]) {
    $variables->addCssRule(
        ":root",
        array(
            "--clr-secondary-2" => get_field("secondary_color", "options")["color_2"]
        )
    );
}

if (get_field("tertiary_color", "options")["is_gradient"]) {
    $variables->addCssRule(
        ":root",
        array(
            "--clr-tertiary-2" => get_field("tertiary_color", "options")["color_2"]
        )
    );
}

if (get_field("quaternary_color", "options")["is_gradient"]) {
    $variables->addCssRule(
        ":root",
        array(
            "--clr-quaternary-2" => get_field("quaternary_color", "options")["color_2"]
        )
    );
}

/**
 * TYPOGRAPHY
 */

if (have_rows("font_imports", "options")) {
    while (have_rows("font_imports", "options")) {
        the_row();
        $variables->addImport(get_sub_field("import"));
    }
} else {
    $imports = [
        "https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap",
        "https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap",
        "https://fonts.googleapis.com/css2?family=Lato&display=swap",
        "https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap"
    ];
    foreach ($imports as $import) :
        $variables->addImport($import);
    endforeach;
}

$variables->addCssRule(
    ":root",
    array(
        "--font-main" => getField('font_main', 'options', true, "Lato, sans-serif"),
        "--font-heading" => getField('font_heading', 'options', true, "Playfair Display, serif"),
        "--font-script" => getField('font_script', 'options', true, "Playfair Display, serif"),
        // "--fs-xl" => "clamp(" . getField("page_header", "options", true, "2.25rem")["font_size_min"] ? getField("page_header", "options", true, "2.25rem")["font_size_min"] : "3" . "px, 3.5vw, " . getField("page_header", "options", true, "3rem")["font_size_max"] . "px)",
        "--fs-1000" => "clamp(" . getField("heading_1", "options", true, "1.75rem")["font_size_min"] . "px, 3.5vw, " . getField("heading_1", "options", true, "2.25rem")["font_size_max"] . "px)",
        "--fs-900" => "clamp(" . getField("heading_2", "options", true, "1.625rem")["font_size_min"] . "px, 3.5vw, " . getField("heading_2", "options", true, "1.875rem")["font_size_max"] . "px)",
        "--fs-800" => "clamp(" . getField("heading_3", "options", true, "1.5rem")["font_size_min"] . "px, 4.5vw, " . getField("heading_3", "options", true, "1.625rem")["font_size_max"] . "px)",
        "--fs-700" => "clamp(" . getField("heading_4", "options", true, "1.375rem")["font_size_min"] . "px, 4.5vw, " . getField("heading_4", "options", true, "1.375rem")["font_size_max"] . "px)",
        "--fs-600" => "clamp(" . getField("heading_5", "options", true, "1.25rem")["font_size_min"] . "px, 4.5vw, " . getField("heading_5", "options", true, "1.25rem")["font_size_max"] . "px)",
        "--fs-500" => "clamp(" . getField("heading_6", "options", true, "1.125rem")["font_size_min"] . "px, 4.5vw, " . getField("heading_6", "options", true, "1.125em")["font_size_max"] . "px)",
        "--fs-400" => get_field("paragraph", "options")["font_size"] . "px",
        "--fs-300" => "0.9375rem",
        "--fs-200" => "0.875rem",
        "--fs-100" => "0.8125rem"
    )
);

// $variables->addCssRule(
//     ".page-header-title, .hero-title",
//     array(
//         "color" => get_field("page_header", "options")["font_color"],
//         "font-weight" => get_field("page_header", "options")["font_weight"],
//         "font-style" => get_field("page_header", "options")["font_style"],
//         "font-family" => "var(--font-" . get_field("page_header", "options")["font_family"] . ")",
//     )
// );

for ($i = 1; $i <= 6; $i++) :
    $heading = get_field("heading_$i", "options");

    $variables->addCssRule(
        "h$i",
        array(
            "font-weight" => $heading["font_weight"],
            "font-style" => $heading["font_style"],
            "font-family" => $heading["font_family"],
            "color" => $heading["font_color"]
        )
    );
endfor;

$variables->addCssRule(
    "p",
    array(
        "color" => get_field("paragraph", "options")["font_color"],
        "font-size" => get_field("paragraph", "options")["font_size"] . "px",
    )
);

$variables->addCssRule(
    "a, .ui-widget-content a",
    array(
        "color" => getField("links", "options", true, "var(--clr-primary)")["font_color"],
        "font-weight" => get_field("links", "options")["font_weight"],
        "font-style" => get_field("links", "options")["font_style"],
        "text-decoration" => get_field("links", "options")["text_decoration"],
    )
);

$variables->addCssRule(
    "a:hover, a:focus, a:active",
    array(
        "color" => get_field("links", "options")["hover_styles"]["font_color"],
        "font-weight" => get_field("links", "options")["hover_styles"]["font_weight"],
        "font-style" => get_field("links", "options")["hover_styles"]["font_style"],
        "text-decoration" => get_field("links", "options")["hover_styles"]["text_decoration"],
    )
);

/**
 * check if Gradient is set in Theme Colors
 *
 * @param [type] $color
 * @return boolean
 */
function isGradient($color, $gradient)
{
    return getField($color . "_color", "options")["is_gradient"] && $gradient;
}

function getColor($color)
{
    return getField($color . "_color", "options", true, "white");
}

function getBgColor($color, $gradient = false)
{
    if ($color === "white" || $color === "black" || $color === "transparent") return $color;

    if (!isGradient($color, $gradient)) return "var(--clr-$color)";

    $gradient_a = "var(--clr-$color)";
    $gradient_b = "var(--clr-$color-2)";
    return "linear-gradient(45deg, $gradient_a, $gradient_b)";
}

$variables->addCssRule(
    ":root",
    array(
        "--menu-top-level-default-font-color" => get_field('menu_colors', 'options')['top_level_default']['default_font_color'],
        "--menu-top-level-hover-font-color" => get_field('menu_colors', 'options')['top_level_default']['font_color_hover'],
        "--menu-top-level-default-bg-color" => getBgColor(get_field('menu_colors', 'options')['top_level_default']['default_bg_color'], get_field('menu_colors', 'options')['top_level_default']['default_bg_color_is_gradient']),
        "--menu-top-level-hover-bg-color" => getBgColor(get_field('menu_colors', 'options')['top_level_default']['bg_color_hover'], get_field('menu_colors', 'options')['top_level_default']['bg_color_hover_is_gradient']),
        "--menu-submenu-header-font-color" => get_field('menu_colors', 'options')['submenu_default']['header_font_color'],
        "--menu-submenu-header-font-color-hover" => get_field('menu_colors', 'options')['submenu_default']['header_font_color_hover'],
        "--menu-submenu-default-font-color" => get_field('menu_colors', 'options')['submenu_default']['default_font_color'],
        "--menu-submenu-hover-font-color" => get_field('menu_colors', 'options')['submenu_default']['font_color_hover'],
        "--menu-submenu-default-bg-color" => getBgColor(get_field('menu_colors', 'options')['submenu_default']['default_bg_color'], get_field('menu_colors', 'options')['submenu_default']['default_bg_color_is_gradient']),
        "--menu-submenu-hover-bg-color" => getBgColor(get_field('menu_colors', 'options')['submenu_default']['bg_color_hover'], get_field('menu_colors', 'options')['submenu_default']['bg_color_hover_is_gradient']),

        "--sticky-menu-toggle-default-font-color" => get_field('menu_colors', 'options')['toggle_sticky']['default_font_color'],
        "--sticky-menu-toggle-hover-font-color" => get_field('menu_colors', 'options')['toggle_sticky']['font_color_hover'],
        "--sticky-menu-toggle-default-bg-color" => getBgColor(get_field('menu_colors', 'options')['toggle_sticky']['default_bg_color'], get_field('menu_colors', 'options')['toggle_sticky']['default_bg_color_is_gradient']),
        "--sticky-menu-toggle-hover-bg-color" => getBgColor(get_field('menu_colors', 'options')['toggle_sticky']['bg_color_hover'], get_field('menu_colors', 'options')['toggle_sticky']['bg_color_hover_is_gradient']),
        "--sticky-menu-submenu-back-font-color" => get_field('menu_colors', 'options')['submenu_sticky']['back_font_color'],
        "--sticky-menu-submenu-back-font-color-hover" => get_field('menu_colors', 'options')['submenu_sticky']['back_font_color_hover'],
        "--sticky-menu-submenu-back-bg-color" => getBgColor(get_field('menu_colors', 'options')['submenu_sticky']['back_bg_color'], get_field('menu_colors', 'options')['submenu_sticky']['back_bg_color_is_gradient']),
        "--sticky-menu-submenu-back-bg-color-hover" => getBgColor(get_field('menu_colors', 'options')['submenu_sticky']['back_bg_color_hover'], get_field('menu_colors', 'options')['submenu_sticky']['back_bg_color_hover_is_gradient']),
        "--sticky-menu-submenu-default-font-color" => get_field('menu_colors', 'options')['submenu_sticky']['default_font_color'],
        "--sticky-menu-submenu-hover-font-color" => get_field('menu_colors', 'options')['submenu_sticky']['font_color_hover'],
        "--sticky-menu-submenu-default-bg-color" => getBgColor(get_field('menu_colors', 'options')['submenu_sticky']['default_bg_color'], get_field('menu_colors', 'options')['submenu_sticky']['default_bg_color_is_gradient']),
        "--sticky-menu-submenu-hover-bg-color" => getBgColor(get_field('menu_colors', 'options')['submenu_sticky']['bg_color_hover'], get_field('menu_colors', 'options')['submenu_sticky']['bg_color_hover_is_gradient']),

        "--sidebar-top-level-default-font-color" => get_field('menu_colors', 'options')['top_level_sidebar']['default_font_color'],
        "--sidebar-top-level-hover-font-color" => get_field('menu_colors', 'options')['top_level_sidebar']['font_color_hover'],
        "--sidebar-top-level-default-bg-color" => getBgColor(get_field('menu_colors', 'options')['top_level_sidebar']['default_bg_color'], get_field('menu_colors', 'options')['top_level_sidebar']['default_bg_color_is_gradient']),
        "--sidebar-top-level-hover-bg-color" => getBgColor(get_field('menu_colors', 'options')['top_level_sidebar']['bg_color_hover'], get_field('menu_colors', 'options')['top_level_sidebar']['bg_color_hover_is_gradient']),
        "--sidebar-submenu-default-font-color" => get_field('menu_colors', 'options')['submenu_sidebar']['default_font_color'],
        "--sidebar-submenu-hover-font-color" => get_field('menu_colors', 'options')['submenu_sidebar']['font_color_hover'],
        "--sidebar-submenu-default-bg-color" => getBgColor(get_field('menu_colors', 'options')['submenu_sidebar']['default_bg_color'], get_field('menu_colors', 'options')['submenu_sidebar']['default_bg_color_is_gradient']),
        "--sidebar-submenu-hover-bg-color" => getBgColor(get_field('menu_colors', 'options')['submenu_sidebar']['bg_color_hover'], get_field('menu_colors', 'options')['submenu_sidebar']['bg_color_hover_is_gradient']),
    )
);

/**
 * Header
 */
$variables->addCssRule(
    ":root",
    array(
        "--max-logo-height" => get_field("max_logo_height", "options") . "px"
    )
);
$variables->addCssRule(
    ".featured-buttons",
    array(
        "background-color" => get_field("featured_buttons_background_color", "options") ?? "var(--clr-secondary)",
    )
);
$variables->addCssRule(
    ".featured-buttons .featured-buttons-wrapper .featured-button",
    array(
        "color" => get_field("featured_buttons_color", "options") ?? "var(--clr-primary)",
    )
);


/**
 * FOOTER COLORS
 */
/** Footer */
$variables->addCssRule(
    "footer",
    array(
        "background-color" => get_field("footer_bg_color", "options"),
    )
);

$variables->addCssRule(
    "footer, footer h1, footer h2, footer h3, footer h4, footer h5, footer h6",
    array(
        "background-color" => get_field("footer_bg_color", "options"),
        "color" => get_field("footer_font_color", "options")
    )
);

$variables->addCssRule(
    "footer a",
    array(
        "color" => get_field("footer_link_color", "options"),
        "text-decoration" => get_field("footer_link_text_decoration", "options")
    )
);

$variables->addCssRule(
    "footer a:hover",
    array(
        "color" => get_field("footer_link_color_hover", "options"),
        "text-decoration" => get_field("footer_link_text_decoration_hover", "options")
    )
);

/** Site Info */
$variables->addCssRule(
    "footer .site-info",
    array(
        "background-color" => get_field("site_info_bg_color", "options"),
        "color" => get_field("site_info_font_color", "options")
    )
);

$variables->addCssRule(
    "footer .site-info a",
    array(
        "color" => get_field("site_info_link_color", "options"),
        "text-decoration" => get_field("site_info_link_text_decoration", "options")
    )
);

$variables->addCssRule(
    "footer .site-info a:hover",
    array(
        "color" => get_field("site_info_link_color_hover", "options"),
        "text-decoration" => get_field("site_info_link_text_decoration_hover", "options")
    )
);

$variables->addCssRule(
    "footer .site-info .heart",
    array(
        "color" => get_field("site_info_heart_color", "options")
    )
);

/**
 * Calendar
 */
$variables->addCssRule(
    ".calendar-container .calendar-weekday-slick .simcal-day-label > span.simcal-today",
    array(
        "background-color" => get_field("calendar_background_color_today", "options") ? get_field("calendar_background_color_today", "options") . "!important" : "var(--clr-primary) !important",
    )
);
$variables->addCssRule(
    ".calendar-container .calendar-weekday-slick .simcal-day-label > span.simcal-current, .calendar-container .calendar-weekday-slick .simcal-day-label > span.simcal-current:hover",
    array(
        "background-color" => get_field("calendar_background_color_selected", "options") ? get_field("calendar_background_color_selected", "options") . "!important" : "var(--clr-secondary) !important",
        "border-color" => get_field("calendar_background_color_selected", "options") ? get_field("calendar_background_color_selected", "options") . "!important" : "var(--clr-secondary)",
    )
);
$variables->addCssRule(
    ".calendar-container .calendar-weekday-slick .simcal-day-label > span:hover, .calendar-container .calendar-weekday-slick .simcal-day-label > span:hover .simcal-date-format",
    array(
        "color" => get_field("calendar_text_color_hover", "options") ?? "var(--clr-secondary)",
        "border-color" => get_field("calendar_text_color_hover", "options") ?? "var(--clr-secondary)",
    )
);
$variables->addCssRule(
    ".calendar-container .calendar-weekday-slick .simcal-day-label > span .simcal-date-format",
    array(
        "color" => get_field("calendar_text_color", "options") ?? "var(--clr-primary)",
    )
);
$variables->addCssRule(
    ".calendar-container .calendar-weekday-slick .slick-arrow",
    array(
        "background-color" => get_field("calendar_arrow_color", "options") ?? "var(--clr-secondary)",
        "border-color" => get_field("calendar_arrow_color", "options") ?? "var(--clr-secondary)",
    )
);
$variables->addCssRule(
    ".calendar-container .calendar-weekday-slick .slick-arrow:hover::before, .calendar-container .calendar-weekday-slick .slick-arrow:focus::before, .calendar-container .calendar-weekday-slick .slick-arrow:active::before",
    array(
        "color" => get_field("calendar_arrow_color", "options") ?? "var(--clr-secondary)",
    )
);
$variables->addCssRule(
    ".calendar-container .calendar-event-slick dd.simcal-day .simcal-events .simcal-event .simcal-event-details a, .calendar-container .calendar-event-slick dd.simcal-day .simcal-events .simcal-event .simcal-event-details a h5",
    array(
        "color" => get_field("calendar_link_color", "options") ?? "var(--clr-primary)",
    )
);

/**
 * Buttons
 */
$variables->addCssRule(
    ":root",
    array(
        "--button-background-color" => get_field("button_background_color", "options"),
        "--button-font-color" => get_field("button_font_color", "options"),
        "--button-border-color" => get_field("button_border_color", "options"),
        "--button-background-color-hover" => get_field("button_background_color_hover", "options"),
        "--button-font-color-hover" => get_field("button_font_color_hover", "options"),
        "--button-border-color-hover" => get_field("button_border_color_hover", "options"),
    )
);


/**
 * Shapes
 */
$variables->addCssRule(
    ":root",
    array(
        "--shape-brightness-primary" => get_field("background_pattern_opacities", "options")['primary_color'] . "%",
        "--shape-brightness-secondary" => get_field("background_pattern_opacities", "options")['secondary_color'] . "%"
    )
);

if (get_field("shape_selector", "options")=="circles") {
  $variables->addCssRule(
     ".the-button::after",
     array(
         "border-radius" => "25px",
     )
  );
  $variables->addCssRule(
     ".mega-sub-menu",
     array(
         "border-radius" => "10px !important",
     )
  );
} elseif (get_field("shape_selector", "options")=="squares") {
  $variables->addCssRule(
     ".mission-image img",
     array(
         "border-radius" => "10px !important",
     )
  );
  $variables->addCssRule(
     ".the-button::after, #dpi_pw-request-form .dpi_pw-form-row:last-of-type .dpi_pw-form-column::after",
     array(
         "border-radius" => "10px",
     )
  );
} else {
  $variables->addCssRule(
     ".the-button::after, #dpi_pw-request-form .dpi_pw-form-row:last-of-type .dpi_pw-form-column::after",
     array(
         "border-radius" => "10px",
     )
  );
}

$variables->generateCssFile();

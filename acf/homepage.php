<?php

//Load the hero & featured buttons tab
load_acf_file("tabs/hero");
load_acf_file("tabs/featured_buttons");

//get acf fields for the hero and featured buttons
$fields = array_merge(acf_hero(), acf_featured_buttons());

//if a custom section order for the homepage is set in template settings
if (have_rows("section_order", "options")) :

    //iterate through the sections set in the template settings
    while (have_rows("section_order", "options")) : the_row();

        //get section name
        $section = get_sub_field("section");
        //load according acf tab file
        load_acf_file("tabs/$section");
        //store section name as a vriable function name
        $func = "acf_$section";
        //execute variable function to get the acf fields for the corresponding section
        $new_tab = $func();
        //merge array. append new acf fields to the ones that already exist
        $fields = array_merge($fields, $new_tab);

    endwhile;

else :
    //load default order of sections if no custom order is set
    load_acf_file("tabs/about");
    load_acf_file("tabs/mission");
    load_acf_file("tabs/news");
    load_acf_file("tabs/calendar");

    $fields = array_merge($fields, acf_featured_buttons(), acf_about(), acf_mission(), acf_news(), acf_calendar());

endif;


if (function_exists('acf_add_local_field_group')) :

    acf_add_local_field_group(
        array(
            'key' => 'group_6182f3cb22bd9',
            'title' => 'Homepage',
            "fields" => $fields, //set the custom order here
            'location' => array(
                array(
                    array(
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => 'templates/page-homepage.php',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
            'show_in_rest' => 0,
        )
    );

endif;

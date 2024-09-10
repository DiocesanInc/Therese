<?php

function acf_featured_buttons()
{
return array(
            array(
                'key' => 'field_5f5a27d7acd8b',
                'label' => 'Featured Buttons',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_60ff0354cbe82',
                'label' => 'Buttons or Menu?',
                'name' => 'buttons_or_menu',
                'type' => 'true_false',
                'instructions' => '*choose whether to show featured buttons or a sticky menu.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'message' => '',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => 'Buttons',
                'ui_off_text' => 'Menu',
            ),
      			array(
      				'key' => 'field_6475e92c920dc',
      				'label' => 'Sticky Menu',
      				'name' => '',
      				'aria-label' => '',
      				'type' => 'message',
      				'instructions' => '',
      				'required' => 0,
      				'conditional_logic' => array(
      					array(
      						array(
      							'field' => 'field_60ff0354cbe82',
      							'operator' => '==',
                    'value' => '0',
      						),
      					),
      				),
      				'wrapper' => array(
      					'width' => '',
      					'class' => '',
      					'id' => '',
      				),
      				'message' => 'You can edit your sticky menu here: <a href="' . home_url("/wp-admin/nav-menus.php") . '">Appearance > Menus</a>',
      				'new_lines' => 'wpautop',
      				'esc_html' => 0,
      			),
            array(
                'key' => 'field_5f5a27feacd8c',
                'label' => 'Featured Buttons',
                'name' => 'featured_buttons',
                'type' => 'repeater',
                'instructions' => '*These buttons will display just below the Hero.<br />Max: 4',
                'required' => 0,
        				'conditional_logic' => array(
        					array(
        						array(
        							'field' => 'field_60ff0354cbe82',
        							'operator' => '==',
                      'value' => '1',
        						),
        					),
        				),
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => 'field_60ff03abcbe83',
                'min' => 2,
                'max' => 4,
                'layout' => 'block',
                'button_label' => 'Add Featured Button',
                'sub_fields' => array(
                    // array(
                    //     'key' => 'field_60ff0354cbe82',
                    //     'label' => 'Icon',
                    //     'name' => 'icon',
                    //     'type' => 'font-awesome',
                    //     'instructions' => '',
                    //     'required' => 0,
                    //     'conditional_logic' => 0,
                    //     'wrapper' => array(
                    //         'width' => '50',
                    //         'class' => '',
                    //         'id' => '',
                    //     ),
                    //     'icon_sets' => array(
                    //         0 => 'fas',
                    //         1 => 'far',
                    //         2 => 'fab',
                    //     ),
                    //     'custom_icon_set' => '',
                    //     'default_label' => '',
                    //     'default_value' => '',
                    //     'save_format' => 'element',
                    //     'allow_null' => 0,
                    //     'show_preview' => 1,
                    //     'enqueue_fa' => 0,
                    //     'fa_live_preview' => '',
                    //     'choices' => array(),
                    // ),
                    array(
                        'key' => 'field_60ff03abcbe83',
                        'label' => 'Link',
                        'name' => 'link',
                        'type' => 'link',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'return_format' => 'array',
                    ),
                ),
            ),
        );
}

<?php
if ( function_exists( 'acf_add_local_field_group' ) ) :

acf_add_local_field_group( array(
'key' => 'group_6205406c70ccz',
'title' => 'Ministry Groups Order',
'fields' => array(
    array(
        'key' => 'field_675717bbf792f',
        'label' => 'Ministry Group Order',
        'name' => 'ministry_group_order',
        'aria-label' => '',
        'type' => 'number',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
        ),
        'default_value' => '',
        'min' => '',
        'max' => '',
        'allow_in_bindings' => 0,
        'placeholder' => '',
        'step' => '',
        'prepend' => '',
        'append' => '',
    ),
),
'location' => array(
    array(
        array(
            'param' => 'taxonomy',
            'operator' => '==',
            'value' => 'ministry-group',
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
) );

endif;
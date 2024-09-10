<?php

function acf_news()
{
    return array(
        array(
            'key' => 'field_619e4b8e20523',
            'label' => 'News',
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
            'key' => 'field_6182f5e7311c1',
            'label' => 'News Header',
            'name' => 'news_header',
            'type' => 'text',
            'instructions' => '*Max 30 Characters',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '50',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => 30,
        ),
        array(
            'key' => 'field_61ead174d187a',
            'label' => 'News Category',
            'name' => 'news_category',
            'type' => 'taxonomy',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '50',
                'class' => '',
                'id' => '',
            ),
            'taxonomy' => 'category',
            'field_type' => 'select',
            'allow_null' => 1,
            'add_term' => 0,
            'save_terms' => 0,
            'load_terms' => 0,
            'return_format' => 'id',
            'multiple' => 0,
        ),
        array(
            'key' => 'field_6182f608311c2',
            'label' => 'News Content',
            'name' => 'news_content',
            'type' => 'wysiwyg',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '33',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'tabs' => 'all',
            'toolbar' => 'full',
            'media_upload' => 1,
            'delay' => 0,
        ),
        array(
            'key' => 'field_6182f50e311c1',
            'label' => 'Button',
            'name' => 'news_button',
            'type' => 'link',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '33',
                'class' => '',
                'id' => '',
            ),
            'return_format' => 'array',
        ),
        // array(
        //     'key' => 'field_623a1c6e4f921',
        //     'label' => 'Content Position',
        //     'name' => 'news_content_position',
        //     'type' => 'select',
        //     'instructions' => '',
        //     'required' => 0,
        //     'conditional_logic' => 0,
        //     'wrapper' => array(
        //         'width' => '50',
        //         'class' => '',
        //         'id' => '',
        //     ),
        //     'choices' => array(
        //         'left' => 'Left',
        //         // 'center' => 'Center',
        //         'right' => 'Right',
        //     ),
        //     'default_value' => false,
        //     'allow_null' => 0,
        //     'multiple' => 0,
        //     'ui' => 1,
        //     'ajax' => 0,
        //     'return_format' => 'value',
        //     'placeholder' => '',
        // ),
    );
}

<?php

function acf_about()
{
    return  array(
        array(
            'key' => 'field_6182f5c8311cz',
            'label' => 'About',
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
            'key' => 'field_6182f5e7311cz',
            'label' => 'About Header',
            'name' => 'about_header',
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
        // array(
        //     'key' => 'field_623a1c6e4f92z',
        //     'label' => 'Content Position',
        //     'name' => 'about_content_position',
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
        array(
            'key' => 'field_6182f608311cy',
            'label' => 'About Content',
            'name' => 'about_content',
            'type' => 'wysiwyg',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '50',
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
            'key' => 'field_6182f50e311cz',
            'label' => 'Button',
            'name' => 'about_button',
            'type' => 'link',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '25',
                'class' => '',
                'id' => '',
            ),
            'return_format' => 'array',
        ),
        array(
            'key' => 'field_623a114b9188y',
            'label' => 'Left Image',
            'name' => 'about_background_image1',
            'type' => 'image',
            'instructions' => '*Recommended size 400x600',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '25',
                'class' => '',
                'id' => '',
            ),
            'return_format' => 'array',
            'preview_size' => 'medium',
            'library' => 'all',
            'min_width' => '',
            'min_height' => '',
            'min_size' => '',
            'max_width' => '',
            'max_height' => '',
            'max_size' => '',
            'mime_types' => '',
        ),
        array(
            'key' => 'field_623a114b9188x',
            'label' => 'Top Right Image',
            'name' => 'about_background_image2',
            'type' => 'image',
            'instructions' => '*Recommended size 400x300',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '25',
                'class' => '',
                'id' => '',
            ),
            'return_format' => 'array',
            'preview_size' => 'medium',
            'library' => 'all',
            'min_width' => '',
            'min_height' => '',
            'min_size' => '',
            'max_width' => '',
            'max_height' => '',
            'max_size' => '',
            'mime_types' => '',
        ),
        array(
            'key' => 'field_623a114b91881',
            'label' => 'Bottom Right Image',
            'name' => 'about_background_image3',
            'type' => 'image',
            'instructions' => '*Recommended size 400x300',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '25',
                'class' => '',
                'id' => '',
            ),
            'return_format' => 'array',
            'preview_size' => 'medium',
            'library' => 'all',
            'min_width' => '',
            'min_height' => '',
            'min_size' => '',
            'max_width' => '',
            'max_height' => '',
            'max_size' => '',
            'mime_types' => '',
        )
    );
}

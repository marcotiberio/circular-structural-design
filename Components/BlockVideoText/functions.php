<?php

namespace Flynt\Components\BlockVideoText;

use Flynt\FieldVariables;
use Flynt\Utils\Oembed;

add_filter('Flynt/addComponentData?name=BlockVideoText', function ($data) {
    $data['video'] = Oembed::setSrcAsDataAttribute(
        $data['oembed'],
        [
            'autoplay' => 'true'
        ]
    );

    return $data;
});

function getACFLayout()
{
    return [
        'name' => 'blockVideoText',
        'label' => 'Block: Video Text',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Image Position', 'flynt'),
                'name' => 'imagePosition',
                'type' => 'button_group',
                'choices' => [
                    'imageLeft' => '<i class=\'dashicons dashicons-align-left\' title=\'Image on the left\'></i>',
                    'imageRight' => '<i class=\'dashicons dashicons-align-right\' title=\'Image on the right\'></i>'
                ]
            ],
            [
                'label' => __('Content', 'flynt'),
                'name' => 'contentHtml',
                'type' => 'wysiwyg',
                'delay' => 1,
                'media_upload' => 0,
                'required' => 1,
            ],
            [
                'label' => __('Poster Image', 'flynt'),
                'name' => 'posterImage',
                'type' => 'image',
                'preview_size' => 'medium',
                'mime_types' => 'jpg,jpeg,png',
                'instructions' => __('Recommended Size: Min-Width 1920px; Min-Height: 1080px; Image-Format: JPG, PNG. Aspect Ratio 16/9.', 'flynt'),
                'required' => 1
            ],
            [
                'label' => __('Video', 'flynt'),
                'name' => 'oembed',
                'type' => 'oembed',
                'required' => 1
            ],
            [
                'label' => __('Header', 'flynt'),
                'name' => 'header',
                'type' => 'text',
                'wrapper' => [
                    'width' => 50
                ],
            ],
            [
                'label' => __('Link Text', 'flynt'),
                'name' => 'linkText',
                'type' => 'text',
                'delay' => 1,
                'wrapper' => [
                    'width' => 50
                ],
            ],
            [
                'label' => __('Link URL', 'flynt'),
                'name' => 'linkUrl',
                'type' => 'link',
                'return_format' => 'url',
                'delay' => 1,
                'wrapper' => [
                    'width' => 50
                ],
            ],
            [
                'label' => __('Options', 'flynt'),
                'name' => 'optionsTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => '',
                'name' => 'options',
                'type' => 'group',
                'layout' => 'row',
                'sub_fields' => [
                    FieldVariables\getTheme(),
                    [
                        'label' => __('Size', 'flynt'),
                        'name' => 'size',
                        'type' => 'radio',
                        'other_choice' => 0,
                        'save_other_choice' => 0,
                        'layout' => 'horizontal',
                        'choices' => [
                            'sizeSmall' => __('Small', 'flynt'),
                            'sizeMedium' => __('Medium', 'flynt'),
                            'sizeLarge' => __('Large (Default)', 'flynt'),
                            'sizeHuge' => __('Huge', 'flynt'),
                            'sizeFull' => __('Full', 'flynt'),
                        ],
                        'default_value' => 'sizeLarge',
                    ],
                ]
            ]
        ]
    ];
}

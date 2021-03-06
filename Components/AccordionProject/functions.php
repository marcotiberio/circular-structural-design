<?php

namespace Flynt\Components\AccordionProject;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'AccordionProject',
        'label' => 'Accordion: Project',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Header', 'flynt'),
                'name' => 'header',
                'type' => 'text',
                'wrapper' => [
                    'width' => 30
                ],
            ],
            [
                'label' => __('Title', 'flynt'),
                'name' => 'preContentHtml',
                'type' => 'wysiwyg',
                'tabs' => 'visual,text',
                'media_upload' => 0,
                'delay' => 1,
                'wrapper' => [
                    'width' => 70
                ],
            ],
            [
                'label' => __('Inner Content', 'flynt'),
                'name' => 'contentTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Solution', 'flynt'),
                'name' => 'accordionPanels',
                'type' => 'repeater',
                'layout' => 'block',
                'min' => 1,
                'button_label' => __('Add Solution', 'flynt'),
                'sub_fields' => [
                    [
                        'label' => __('Text', 'flynt'),
                        'name' => 'textTab',
                        'type' => 'tab',
                        'placement' => 'top',
                        'endpoint' => 0
                    ],
                    [
                        'label' => __('Panel Title', 'flynt'),
                        'name' => 'panelTitle',
                        'type' => 'text',
                        'wrapper' => [
                            'width' => 33
                        ],
                    ],
                    [
                        'label' => __('Link Text', 'flynt'),
                        'name' => 'linkText',
                        'type' => 'text',
                        'delay' => 1,
                        'wrapper' => [
                            'width' => 33
                        ],
                    ],
                    [
                        'label' => __('Link URL', 'flynt'),
                        'name' => 'linkUrl',
                        'type' => 'link',
                        'return_format' => 'url',
                        'delay' => 1,
                        'wrapper' => [
                            'width' => 33
                        ],
                    ],
                    [
                        'label' => __('Panel Content', 'flynt'),
                        'name' => 'panelContent',
                        'type' => 'wysiwyg',
                        'tabs' => 'visual,text',
                        'media_upload' => 0,
                        'delay' => 1,
                        'wrapper' => [
                            'width' => 100
                        ],
                    ],
                    [
                        'label' => __('Image', 'flynt'),
                        'name' => 'imageTab',
                        'type' => 'tab',
                        'placement' => 'top',
                        'endpoint' => 0
                    ],
                    [
                        'label' => __('Image', 'flynt'),
                        'name' => 'image',
                        'type' => 'image',
                        'preview_size' => 'medium',
                        'instructions' => __('Image-Format: JPG, PNG, SVG.', 'flynt'),
                        'required' => 0,
                        'mime_types' => 'jpg,jpeg,png,svg',
                        'wrapper' => [
                            'width' => 50
                        ],
                    ],
                    [
                        'label' => __('Video', 'flynt'),
                        'name' => 'videoTab',
                        'type' => 'tab',
                        'placement' => 'top',
                        'endpoint' => 0
                    ],
                    [
                        'label' => __('Video: Vimeo', 'flynt'),
                        'name' => 'vimeoCode',
                        'type' => 'text',
                        'required' => 0,
                        'instructions' => __('https://vimeo.com/XXXXXXXXX', 'flynt'),
                        'wrapper' => [
                            'width' => 50
                        ],
                    ],
                    [
                        'label' => __('Video: Youtube', 'flynt'),
                        'name' => 'youtubeCode',
                        'type' => 'text',
                        'required' => 0,
                        'instructions' => __('https://youtu.be/XXXXXXXXX', 'flynt'),
                        'wrapper' => [
                            'width' => 50
                        ],
                    ],
                ],
            ]
        ],
    ];
}

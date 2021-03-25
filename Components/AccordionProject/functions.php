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
                'label' => __('Accordion Panels', 'flynt'),
                'name' => 'accordionPanels',
                'type' => 'repeater',
                'layout' => 'block',
                'min' => 1,
                'button_label' => __('Add Accordion Panel', 'flynt'),
                'sub_fields' => [
                    [
                        'label' => __('Panel Title', 'flynt'),
                        'name' => 'panelTitle',
                        'type' => 'text',
                        'wrapper' => [
                            'width' => 50
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
                        'type' => 'text',
                        'delay' => 1,
                        'wrapper' => [
                            'width' => 50
                        ],
                    ],
                    [
                        'label' => __('Image', 'flynt'),
                        'name' => 'image',
                        'type' => 'image',
                        'preview_size' => 'medium',
                        'instructions' => __('Image-Format: JPG, PNG, SVG.', 'flynt'),
                        'required' => 1,
                        'mime_types' => 'jpg,jpeg,png,svg',
                    ],
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
                    FieldVariables\getTheme()
                ]
            ]
        ],
    ];
}

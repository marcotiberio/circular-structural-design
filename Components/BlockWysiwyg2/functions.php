<?php

namespace Flynt\Components\BlockWysiwyg2;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'blockWysiwyg2',
        'label' => 'Block: Wysiwyg2',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Text Alignment', 'flynt'),
                'name' => 'textAlignment',
                'type' => 'button_group',
                'choices' => [
                    'textLeft' => '<i class=\'dashicons dashicons-editor-alignleft\' title=\'Align text left\'></i>',
                    'textCenter' => '<i class=\'dashicons dashicons-editor-aligncenter\' title=\'Align text center\'></i>'
                ]
            ],
            [
                'label' => __('Header', 'flynt'),
                'name' => 'header',
                'type' => 'text',
                'delay' => 1,
                'required' => 0,
            ],
            [
                'label' => __('Content Left', 'flynt'),
                'name' => 'contentHtmlSx',
                'type' => 'wysiwyg',
                'delay' => 1,
                'media_upload' => 0,
                'required' => 1,
            ],
            [
                'label' => __('Content Right', 'flynt'),
                'name' => 'contentHtmlDx',
                'type' => 'wysiwyg',
                'delay' => 1,
                'media_upload' => 1,
                'required' => 0,
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
        ]
    ];
}

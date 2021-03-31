<?php

namespace Flynt\Components\Marquee;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'Marquee',
        'label' => 'Marquee',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Background Color', 'flynt'),
                'name' => 'backgroundColor',
                'type' => 'button_group',
                'choices' => [
                    '#fff' => '#fff',
                    '#beccca' => '#beccca'
                ]
            ],
            [
                'label' => __('Section Title', 'flynt'),
                'name' => 'sectionTitle',
                'type' => 'text',
                'delay' => 1,
                'required' => 0,
                'instructions' => __('Please write tour Marquee title with no capilization.', 'flynt')
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
                ]
            ]
        ]
    ];
}

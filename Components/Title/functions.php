<?php

namespace Flynt\Components\Title;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'Title',
        'label' => 'Title',
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
                'instructions' => __('Please write your Section Title with no capilization.', 'flynt')
            ]
        ]
    ];
}

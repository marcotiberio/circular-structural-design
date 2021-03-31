<?php

namespace Flynt\Components\Divider;

function getACFLayout()
{
    return [
        'name' => 'Divider',
        'label' => 'Divider',
        'sub_fields' => [
            [
                [
                    'label' => __('Divider', 'flynt'),
                    'name' => 'message',
                    'type' => 'message',
                    'message' => __('The divider block adds a solid black line to divide two sections.', 'flynt'),
                    'new_lines' => 'wpautop',
                    'esc_html' => 1
                ]
            ],
        ]
    ];
}

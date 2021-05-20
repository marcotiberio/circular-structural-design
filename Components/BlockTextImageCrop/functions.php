<?php

namespace Flynt\Components\BlockTextImageCrop;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'blockTextImageCrop',
        'label' => 'Block: Text Image Crop',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Image', 'flynt'),
                'name' => 'image',
                'type' => 'image',
                'preview_size' => 'medium',
                'required' => 1,
                'mime_types' => 'gif,jpg,jpeg,png',
                'instructions' => __('Image-Format: JPG, PNG, GIF.', 'flynt'),
                'wrapper' => [
                    'width' => 40
                ],
            ],
            [
                'label' => __('Content', 'flynt'),
                'name' => 'contentHtml',
                'type' => 'wysiwyg',
                'delay' => 1,
                'media_upload' => 0,
                'required' => 0,
                'wrapper' => [
                    'width' => 60
                ],
            ]
        ]
    ];
}

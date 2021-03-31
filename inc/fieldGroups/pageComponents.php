<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'pageComponents',
        'title' => 'Page Components',
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'pageComponents',
                'label' => __('Page Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    Components\AccordionProject\getACFLayout(),
                    Components\BlockCollapse\getACFLayout(),
                    Components\BlockImageText\getACFLayout(),
                    Components\BlockWysiwyg\getACFLayout(),
                    Components\BlockWysiwyg2\getACFLayout(),
                    Components\BlockVideoOembed\getACFLayout(),
                    Components\Divider\getACFLayout(),
                    Components\GridPostsLatest\getACFLayout(),
                    Components\HeroImageCta\getACFLayout(),
                    Components\ListArticle\getACFLayout(),
                    Components\Marquee\getACFLayout(),
                    Components\SliderImagesText\getACFLayout(),
                ]
            ]
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '!=',
                    'value' => 'post'
                ]
            ]
        ]
    ]);
});

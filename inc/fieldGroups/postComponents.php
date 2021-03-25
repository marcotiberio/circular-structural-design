<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'postComponents',
        'title' => 'Post Components',
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'postComponents',
                'label' => __('Post Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    Components\BlockCollapse\getACFLayout(),
                    Components\BlockImage\getACFLayout(),
                    Components\BlockImageText\getACFLayout(),
                    Components\BlockVideoOembed\getACFLayout(),
                    Components\BlockWysiwyg\getACFLayout(),
                    Components\BlockWysiwyg2\getACFLayout(),
                    Components\SliderImages\getACFLayout(),

                    Components\AccordionDefault\getACFLayout(),
                    Components\AccordionProject\getACFLayout(),
                    Components\BlockCountUp\getACFLayout(),
                    Components\BlockImageTextParallax\getACFLayout(),
                    Components\BlockTextImageCrop\getACFLayout(),
                    Components\BlockWysiwygSidebar\getACFLayout(),
                    Components\BlockWysiwygTwoCol\getACFLayout(),
                    Components\FormContactForm7\getACFLayout(),
                    Components\FormNewsletter\getACFLayout(),
                    Components\HeroCta\getACFLayout(),
                    Components\HeroImageCta\getACFLayout(),
                    Components\HeroImageText\getACFLayout(),
                    Components\HeroSlider\getACFLayout(),
                    Components\HeroTextImage\getACFLayout(),
                    Components\ListArticle\getACFLayout(),
                    Components\ListIcons\getACFLayout(),
                    Components\ListLogos\getACFLayout(),
                    Components\ListSocial\getACFLayout(),
                    Components\NavigationFooterColumns\getACFLayout(),
                    Components\SliderImageGallery\getACFLayout(),
                    Components\SliderImagesCentered\getACFLayout(),
                ],
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'post',
                ],
            ],
        ],
    ]);
});

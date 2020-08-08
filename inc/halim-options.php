<?php

if(class_exists('CSF')){

    $prefix = 'halim_options';

    CSF::createOptions($prefix, array(
        'menu_title' => __('Halim Options', 'halim'),
        'menu_slug' => 'halim-options',
        'framework_title' => 'Halim Options - <small>Abdullah Nahian</small>',
        'menu_parent' => 'themes.php',
        'menu_type' => 'submenu'
    ));

    CSF::createSection($prefix, array(
        'id' => 'header_options',
        'title' => 'Header Options'
    ));

    CSF::createSection($prefix, array(
        'parent' => 'header_options',
        'title' => __('Header Left', 'halim'),
        'fields' => array(
            array(
                'id' => 'header_email',
                'type' => 'text',
                'title' => __('Email Address', 'halim')
            ),
            array(
                'id' => 'header_phone',
                'type' => 'text',
                'title' => __('Phone Number', 'halim')
            )
        )

    ));

    CSF::createSection($prefix, array(
        'title' => 'Header Icons',
        'parent' => 'header_options',
        'fields' => array(
            array(
                'id' => 'header_icons',
                'title'=> __('Header Icons', 'halim'),
                'type' => 'group',
                'button_title' => __('Add New Social Box', 'halim'),
                'fields' => array(
                    array(
                        'id' => __('social_title', 'halim'),
                        'type' => 'text',
                        'title' => 'Social Title'
                    ),
                    array(
                        'id' => 'social_link',
                        'type' => 'text',
                        'title' => __('Social Link', 'halim')
                    ),
                    array(
                        'id' => 'social_icon',
                        'type' => 'icon',
                        'title' => __('Social Icon', 'halim')
                    )
                )
            )
        )
    ));

    CSF::createSection($prefix, array(
        'parent' => 'header_options',
        'title' => 'Logo',
        'fields' => array(
            array(
                'id' => 'logo',
                'type' => 'media',
                'title' => __('Upload Logo', 'halim')
            )
        )
    ));
}
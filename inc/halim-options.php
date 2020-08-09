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

    // Header Options
    CSF::createSection($prefix, array(
        'id' => 'header_options',
        'title' => 'Header Options',
        'icon' => 'fas fa-address-card'
    ));

    CSF::createSection($prefix, array(
        'parent' => 'header_options',
        'title' => __('Header Left', 'halim'),
        'icon' => 'fas fa-arrow-right',
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
        'icon' => 'fas fa-arrow-right',
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
        'icon' => 'fas fa-arrow-right',
        'fields' => array(
            array(
                'id' => 'logo',
                'type' => 'media',
                'title' => __('Upload Logo', 'halim')
            )
        )
    ));

    // About Options
    CSF::createSection($prefix, array(
        'id' => 'about_options',
        'title' => __('About Section', 'halim'),
        'icon' => 'fas fa-arrow-right',
    ));

    // About Section Title
    CSF::createSection($prefix, array(
        'parent'=> 'about_options',
        'title' => __('About Section Title', 'halim'),
        'fields' => array(
            array(
                'id' => 'about_sec_subtitle',
                'title' => __('Sub Title', 'halim'),
                'type' => 'text',
                'desc' => __('Write About Section Subtitle Here', 'halim')
            ),
            array(
                'id' => 'about_sec_title',
                'title' => __('Title', 'halim'),
                'type' => 'text'
            ),
            array(
                'id' => 'about_sec_des',
                'title' => __('Description', 'halim'),
                'type' => 'textarea'
            )
        )
    ));

    // About Page Content
    CSF::createSection($prefix, array(
        'parent'=> 'about_options',
        'title' => __('About Page Content', 'halim'),
        'fields' => array(
            array(
                'id' => 'about_page_title',
                'title' => __('Title', 'halim'),
                'type' => 'text',
                'desc' => __('Write About Page Title Here', 'halim')
            ),
            array(
                'id' => 'about_page_desc',
                'title' => __('About Page Description', 'halim'),
                'type' => 'textarea'
            ),
            array(
                'id' => 'about_page_btn',
                'title' => __('About Page Link', 'halim'),
                'type' => 'text'
            )
        )
    ));

     // About Page Features
     CSF::createSection($prefix, array(
        'parent'=> 'about_options',
        'title' => __('About Page Features', 'halim'),
        'fields' => array(
            array(
                'id' => 'about_page_features',
                'title' => __('About Features', 'halim'),
                'type' => 'group',
                'button_title' => __('Add New Feature', 'halim'),
                'desc' => __('Write About Page Title Here', 'halim'),
                'fields' => array(
                    array(
                        'id' => 'features_title',
                        'title' => __('About Feature Title', 'halim'),
                        'type' => 'text'
                    ),
                    array(
                        'id' => 'features_icon',
                        'title' => __('About Feature Icon', 'halim'),
                        'type' => 'icon'
                    ),
                    array(
                        'id' => 'features_des',
                        'title' => __('About Feature Description', 'halim'),
                        'type' => 'textarea'
                    )
                )
            )
        )
    ));
}
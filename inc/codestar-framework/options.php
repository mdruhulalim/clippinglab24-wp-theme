<?php
// Control core classes for avoid errors
if(class_exists('CSF')){
    $prefix = 'clippinglab';

    // create option
    CSF::createOptions($prefix,array(
        'menu_title' => 'theme option',
        'menu_slug' => 'theme-option',
        'framework_title' => $prefix,
        'menu_icon' => 'dashicons-superhero',
    ));

    
    // Create a section for home parent
    CSF::createSection( $prefix, array(
        'title'  => 'homePage',
        'id' => 'homePage',
        'icon' => 'fas fa-table',
    ) );
    // home page section one
    CSF::createSection($prefix, array(
        'title' => 'Section one',
        'id' => 'section-one',
        'parent' => 'homePage',
        'fields' => array(
            array(
                'title' => 'Section one top text',
                'id' => 'hs1-top-text',
                'type' => 'wp_editor',
                'default' => 'Photo <span>Editing Company</span>'
            ),
            array(
                'title' => 'Section one Heading text',
                'id' => 'hs1-header',
                'type' => 'text',
                'default' => 'Professional Clipping Path & Photo Editing Service'
            ),array(
                'title' => 'Section one sub heading',
                'id' => 'hs1-sub-heading',
                'type' => 'wp_editor',
                'default' => "We provide 100% handmade photo editing services to use
                Photoshop. So you <br />
                will get great quality services. always try to deliver your
                order within 24 hours or less."
            ),array(
                'title' => 'Section one button one text',
                'id' => 'hs1-button-one-text',
                'type' => 'text',
                'default' => 'Free Trail'
            ),array(
                'title' => 'Type page name',
                'id' => 'hs1-button-one-link',
                'type' => 'text',
                'default' => '#'
            ),array(
                'title' => 'Section one button two text',
                'id' => 'hs1-button-two-text',
                'type' => 'text',
                'default' => 'Make A Budget'
            ),array(
                'title' => 'Type page name',
                'id' => 'hs1-button-two-link',
                'type' => 'text',
                'default' => '#'
            ),
            // end left site
            array(
                'id'    => 'hs1-image',
                'type'  => 'media',
                'title' => 'Section one image',
            ),array(
                'id'    => 'hs1-p1',
                'type'  => 'media',
                'title' => 'Section one P1'
            ),array(
                'id'    => 'hs1-p2',
                'type'  => 'media',
                'title' => 'Section one P2'
            ),array(
                'id'    => 'hs1-p3',
                'type'  => 'media',
                'title' => 'Section one P3'
            ),array(
                'id'    => 'hs1-p4',
                'type'  => 'media',
                'title' => 'Section one P4'
            )
              
        )
    ));
    // home page section two
    CSF::createSection($prefix, array(
        'title' => 'Section two',
        'id' => 'section-two',
        'parent' => 'homePage',
        'fields' => array(
            array(
                'title' => 'Section two team image',
                'id' => 'hs2-image',
                'type' => 'media',
            ),array(
                'title' => 'Section two p1',
                'id' => 'hs2-p1',
                'type' => 'media',
            ),array(
                'title' => 'Section two since text',
                'type'  => 'text',
                'id'    => 'hs2-since-text',
                'default'=> 'SINCE 1980.'
            ),
            // end section two left
            array(
                'title' => 'Section two top text',
                'id'    => 'hs2-top-text',
                'type'  => 'text',
                'default'=> 'Why Choos Us'
            ),array(
                'title' => 'Section two heading text',
                'id'    => 'hs2-heading',
                'type'  => 'text',
            ),array(
                'title' => 'Section two heading two text',
                'id'    => 'hs2-heading-two',
                'type'  => 'text',
            ),array(
                'title' => 'Section two sub heading',
                'id'    => 'hs2-sub-heading',
                'type'  => 'text'
            ),array(
                'title' => 'Section two button',
                'id' => 'hs2-button-text',
                'type' => 'text',
            ),array(
                'title' => 'Type page name',
                'id' => 'hs2-button-link',
                'type' => 'text'
            ),
        )
    ));


    // Create a section for footer
    CSF::createSection( $prefix , array(
        'title' => 'footer options',
        'id' => 'footer-options',
        'icon' => 'fas fa-table',
    ));
     // Section footer bottom field
     CSF::createSection($prefix, array(
        'title' => 'footer bottom',
        'id' => 'footer-bottom',
        'parent' => 'footer-options',
        'fields' => array(
            array(
                'title' => 'Copywrite text',
                'id' => 'Copywrite',
                'type' => 'wp_editor',
                'default' => '© 2023 Clippinglab24 |  All Rights Reserved'
            ),
            array(
                'title' => 'Developer link',
                'id' => 'developer-link',
                'type' => 'wp_editor',
                'default' => 'Made With ❤ by <a href="https://www.facebook.com/ruhulronny8">RR - Ruhul Ronny'
            ),
        )
    ));
};
<?php

function oprofile_footer($wp_customize)
{
    $wp_customize->add_setting(
        'oprofile_footer_email',
        [
            'default' => 'loris@oclock.io'
        ]
    );

    $wp_customize->add_control(
        'oprofile_footer_email',
        [
            // Le type d'input
            'type' => 'email',
            // La section sur laquelle est rattachée le control
            'section' => 'oprofile_footer',
            // Le label affiché dans l'UI
            'label' => 'Adresse email',
            'description' => 'Adresse email affichée dans le footer'
        ]
    );

    $wp_customize->add_setting(
        'oprofile_footer_phone',
        [
            'default' => '06 06 06 06 06'
        ]
    );

    $wp_customize->add_control(
        'oprofile_footer_phone',
        [
            // Le type d'input
            'type' => 'text',
            // La section sur laquelle est rattachée le control
            'section' => 'oprofile_footer',
            // Le label affiché dans l'UI
            'label' => 'Numéro de téléphone',
            'description' => 'Numéro à afficher dans le footer...'
        ]
    );

    $wp_customize->add_setting(
        'oprofile_footer_address',
        [
            'default' => '10 rue Michu 17000 La Rochelle'
        ]
    );

    $wp_customize->add_control(
        'oprofile_footer_address',
        [
            // Le type d'input
            'type' => 'textarea',
            // La section sur laquelle est rattachée le control
            'section' => 'oprofile_footer',
            // Le label affiché dans l'UI
            'label' => 'Adresse',
            'description' => 'Adresse postale...'
        ]
    );

    $wp_customize->add_setting(
        'oprofile_footer_active',
        []
    );

    $wp_customize->add_control(
        'oprofile_footer_active',
        [
            // Le type d'input
            'type' => 'checkbox',
            // La section sur laquelle est rattachée le control
            'section' => 'oprofile_footer',
            // Le label affiché dans l'UI
            'label' => 'Activer l\'affichage du footer',
            'description' => 'Permet de masquer ou afficher le footer'
        ]
    );

    $wp_customize->add_setting(
        'oprofile_footer_bgcolor',
        [
            'default' => '#292e4c'
        ]
    );

    // Méthode via l'exploitation de la classe WP_Customize_Color_Control
    // https://developer.wordpress.org/reference/classes/wp_customize_color_control/
    // on créé une instance de WP_Customize_Color_Control
    // $color_control_object = new WP_Customize_Color_Control(
    //     $wp_customize,
    //     'footer_bgcolor',
    //     [
    //         'label' => 'Couleur de fond du footer',
    //         'section' => 'oprofile_footer',
    //         'settings' => 'oprofile_footer_bgcolor',
    //         'description' => 'Permet de changer la couleur de fond du footer'
    //     ]
    // );

    // // on utilise directement l'ojet dans la méthode add_control
    // $wp_customize->add_control($color_control_object);

    // Méthode + rapide

    $wp_customize->add_control(
        'oprofile_footer_bgcolor',
        [
            // Le type d'input
            'type' => 'color',
            // La section sur laquelle est rattachée le control
            'section' => 'oprofile_footer',
            // Le label affiché dans l'UI
            'label' => 'Couleur de fond du footer',
            'description' => 'Permet de changer la couleur de fond du footer'
        ]
    );
}

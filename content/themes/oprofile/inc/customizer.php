<?php

// on inclus nos fichiers de customizer (un fichier par section)
require 'customizer/oprofile_home.php';
require 'customizer/oprofile_footer.php';

if (!function_exists('oprofile_customize_register')) {

    function oprofile_customize_register($wp_customize)
    {

        // Première étape : l'ajout d'un panel
        // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_panel/

        $wp_customize->add_panel(
            // Identifiant unique du panel
            'oprofile_theme_panel',
            [
                // Emplacement
                'priority' => 1,
                // Description affichée dans l'UI
                'description' => 'oProfile - Gestion du thème',
                // Titre affiché dans l'UI
                'title' => 'oProfile'
            ]
        );

        // Deuxième étape : ajouter une section dans notre panel
        // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_section/
        $wp_customize->add_section(
            // Identifiant unique de la section
            'oprofile_home',
            [
                'title' => 'Accueil',
                'description' => 'oProfile - Gestion de la page Accueil',
                // Identifiant du panel dans lequel placer la section
                'panel' => 'oprofile_theme_panel'
            ]
        );

        $wp_customize->add_section(
            // Identifiant unique de la section
            'oprofile_footer',
            [
                'title' => 'Footer',
                'description' => 'oProfile - Gestion ddu footer',
                // Identifiant du panel dans lequel placer la section
                'panel' => 'oprofile_theme_panel'
            ]
        );

        // on appelle la fonction dédiée au customizer de la section home
        oprofile_home($wp_customize);
        // on appelle la fonction dédiée au customizer de la section footer
        oprofile_footer($wp_customize);
    }
}

add_action('customize_register', 'oprofile_customize_register');

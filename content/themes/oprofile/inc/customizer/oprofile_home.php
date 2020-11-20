<?php

function oprofile_home($wp_customize)
{
    // Troisième étape : ajouter un setting et son control

    // 1. Créer le setting
    // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_setting/
    $wp_customize->add_setting(
        'oprofile_posts_count',
        [
            'default' => 6
        ]
    );

    // 2. Ajouter son control
    // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_control/
    $wp_customize->add_control(
        'oprofile_posts_count',
        [
            // Le type d'input
            'type' => 'number',
            'input_attrs' => [
                'min' => 0,
                'max' => 10,
                'step' => 2
            ],
            // La section sur laquelle est rattachée le control
            'section' => 'oprofile_home',
            // Le label affiché dans l'UI
            'label' => 'Nombre d\'articles',
            'description' => 'Nombre d\'articles affichés sur la page d\'accueil'
        ]
    );

    $wp_customize->add_setting(
        'oprofile_home_insert',
        []
    );

    $wp_customize->add_control(
        'oprofile_home_insert',
        [
            // Le type d'input
            'type' => 'dropdown-pages',
            // La section sur laquelle est rattachée le control
            'section' => 'oprofile_home',
            // Le label affiché dans l'UI
            'label' => 'Contenu à insérer',
            'description' => 'Sélectionnez une page à insérer sur la home'
        ]
    );

    $wp_customize->add_setting(
        'oprofile_home_category_display',
        [
            'default' => 'news'
        ]
    );

    // on souhaite avoir ici un select qui va contenir nos catégories
    // https://developer.wordpress.org/reference/functions/get_categories/
    
    // on utilise la fonction get_categories() qui me retourne un array d'objets correspondants à mes catégories
    // echo '<pre style="color:black">';
    // var_dump(get_categories());
    // echo '</pre>';

    $all_posts_categories = get_categories();

    //puis on boucle sur cet array pour alimenter un autre array ($array_choices) qui sera utilisé pour contruire mon select

    foreach ($all_posts_categories as $posts_category) {
        $array_choices[$posts_category->slug] = $posts_category->name;
    }

    // echo '<pre style="color:black">';
    // var_dump($array_choices);
    // echo '</pre>';

    $wp_customize->add_control(
        'oprofile_home_category_display',
        [
            // Le type d'input
            'type' => 'select',
            // ici, on va fournir un array avec nos <options>
            'choices' => $array_choices,
            // La section sur laquelle est rattachée le control
            'section' => 'oprofile_home',
            // Le label affiché dans l'UI
            'label' => 'Catégorie d\'articles à afficher',
            'description' => 'Sélectionnez une catégorie d\'articles à afficher sur la home'
        ]
    );
}
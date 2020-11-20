<?php

/*
Plugin Name: oSkills
Description: Plugin permettant de gérer vos compétences.
Author: AA WP
Version: 1.0
*/

// On sécurise le plugin
if (!defined('WPINC')) { die; }

class oSkills
{
    public function __construct()
    {
        add_action('init', [$this, 'register_cpt']);
    }

    public function register_cpt()
    {
        $labels = [
            'name'               => 'Compétences',
            'singular_name'      => 'Compétence',
            'menu_name'          => 'Compétences',
            'name_admin_bar'     => 'Compétence',
            'add_new'            => 'Ajouter une compétence',
            'add_new_item'       => 'Ajouter une nouvelle compétence',
            'new_item'           => 'Nouvelle compétence',
            'edit_item'          => 'Editer une compétence',
            'view_item'          => 'Voir la compétence',
            'all_items'          => 'Voir toutes les compétences',
            'search_items'       => 'Rechercher une compétence',
            'not_found'          => 'Aucune compétence trouvée',
            'not_found_in_trash' => 'Aucune compétence trouvée dans la corbeille',
        ];

        $args = [
            'labels' => $labels,
            'public' => true,
            'hierarchical' => false,
            'exclude_from_search' => true,
            'menu_position' => 6,
            'menu_icon' => 'dashicons-welcome-learn-more',
            'supports' => [
                'title',
                'editor',
                'custom-fields',
            ]
        ];

        register_post_type(
            'skill',
            $args
        );
    }

    public function oskills_activate()
    {
        $this->register_cpt();
        flush_rewrite_rules();
    }

    public function oskills_deactivate()
    {
        flush_rewrite_rules();
    }
}

$oskills = new oSkills();

// A l'activation du plugin
register_activation_hook(__FILE__, [$oskills, 'oskills_activate']);

// A la désactivation du plugin
register_deactivation_hook(__FILE__, [$oskills, 'oskills_deactivate']);
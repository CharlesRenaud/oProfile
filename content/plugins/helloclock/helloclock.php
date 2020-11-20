<?php

/*
Plugin Name: HelloClock
Plugin URI: https://oclock.io
Description: Un plugin pour afficher la date et l'heure dans le footer de votre site
Author: AA WP
Version: 1.0
Author URI: https://oclock.io
*/

if (!defined('WPINC')) {
    die();
}

function say_helloclock() {
    date_default_timezone_set('Europe/Paris');
    $date = date('d/m/Y');
    $heure = date('H:i:s');
    echo '<p class="helloclock"> Hello ! Nous sommes le ' . $date . ', il est déjà ' . $heure . '.</p>';
}

function style_helloclock() {
    echo '<style type="text/css">
            .helloclock {
                text-align: center;
                padding: 1em;
                color: blue;
                background-color: aliceblue;
            }
        </style>';
}

add_action('wp_footer', 'say_helloclock');
add_action('wp_head', 'style_helloclock');

function helloclock_activate() {
    // Faire quelque chose à l'activation du plugin
}

function helloclock_deactivate() {
    // Faire quelque chose à la désactivation du plugin
}

// Activation
register_activation_hook(__FILE__, 'helloclock_activate');

// Désactivation
register_deactivation_hook(__FILE__, 'helloclock_deactivate');
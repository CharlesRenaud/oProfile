<?php

/*
Plugin name: O Redirect To
Description: Un plugin de redirection
Version: 1.0
*/

if (!defined('WPINC')) {
    die();
}

// VERSION SANS POO

// function o_redirect() {
//     // Si je m'apprête à afficher un contenu de type
//     // article ou page
//     // https://developer.wordpress.org/reference/functions/is_single/
//     // https://developer.wordpress.org/reference/functions/is_page/
//     if (is_single() || is_page()) {
//         // On récupère notre custom field
//         // https://developer.wordpress.org/reference/functions/get_post_meta/
//         // https://developer.wordpress.org/reference/functions/get_the_id/
//         $cf = get_post_meta(get_the_ID(), 'oredirection', true);
//         // echo '<pre style="color:black;">';
//         // var_dump($cf);
//         // echo '</pre>';

//         // Si le CF n'est pas vide
//         // c'est que j'ai une redirection à faire
//         if (!empty($cf)) {
//             // on redirige vers l'URL renseignée
//             // https://fr.wikipedia.org/wiki/Liste_des_codes_HTTP

//             // Si ACF "Lien vers page ou article"
//             // il faut transformer l'id en URL

//             $cf = get_permalink($cf);
//             wp_redirect($cf, 301);
//             exit;
//         }
//     }
// }

// add_action('template_redirect', 'o_redirect');

// VERSION POO

class ORedirectTo
{
    public function __construct()
    {
        add_action('template_redirect', [$this, 'redirect']);
    }

    public function redirect()
    {
        if (is_single() || is_page()) {

            $cf = get_post_meta(get_the_ID(), 'oredirection', true);

            if (!empty($cf)) {
            
                $cf = get_permalink($cf);
                wp_redirect($cf, 301);
                exit;
            }
        }
    }
}

$ort = new ORedirectTo();
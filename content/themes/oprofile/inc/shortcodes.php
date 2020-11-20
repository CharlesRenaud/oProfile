<?php

function rose_tricot_display($atts)
{

    $a = shortcode_atts([
        'texte' => 'Tricot !',
        'couleur' => 'yellow'
    ], $atts);

    return '<h1 style="font-size:3em;color:' . $a['couleur'] . ';">'. $a['texte'] .'</h1>';
}
add_shortcode('tricot', 'rose_tricot_display');

function michu_message($atts, $content=null) {
    return '<p style="font-weight:bold;color:lime;">' . $content . '</p>';
}

add_shortcode('michumessage', 'michu_message');
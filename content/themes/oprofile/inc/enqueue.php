<?php

if (!function_exists('oprofile_enqueue')) {

    function oprofile_enqueue()
    {

        wp_enqueue_style(
            'main-style',
            get_theme_file_uri('public/css/style.css'),
            [],
            '20200316'
        );

        wp_enqueue_script(
            'app',
            get_theme_file_uri('public/js/app.js'),
            [],
            '20200316',
            true
        );
    }
}

add_action('wp_enqueue_scripts', 'oprofile_enqueue');

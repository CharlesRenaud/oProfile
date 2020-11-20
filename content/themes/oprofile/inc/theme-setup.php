<?php

if (!function_exists('oprofile_setup')) {
    function oprofile_setup() {

        add_theme_support('title-tag');

        add_theme_support('post-thumbnails');

        register_nav_menus([
            'main-menu' => 'Menu hamburger de navigation'
        ]);

    }
}

add_action('after_setup_theme', 'oprofile_setup');
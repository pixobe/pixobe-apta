<?php

/**
 * Enqueue block stylesheets.
 */

if (! function_exists('pixobeapta_block_stylesheets')) :
    /**
     * Enqueue custom block stylesheets
     *
     * @since Twenty Twenty-Four 1.0
     * @return void
     */
    function pixobeapta_block_stylesheets()
    {
        /**
         * The wp_enqueue_block_style() function allows us to enqueue a stylesheet
         * for a specific block. These will only get loaded when the block is rendered
         * (both in the editor and on the front end), improving performance
         * and reducing the amount of data requested by visitors.
         *
         * See https://make.wordpress.org/core/2021/12/15/using-multiple-stylesheets-per-block/ for more info.
         */
        wp_enqueue_block_style(
            'core/button',
            array(
                'handle' => 'pixobeapta-outline-button-style',
                'src'    => get_parent_theme_file_uri('assets/css/button.css'),
                'ver'    => wp_get_theme(get_template())->get('Version'),
                'path'   => get_parent_theme_file_path('assets/css/button.css'),
            )
        );
    }
endif;


add_action('init', 'pixobeapta_block_stylesheets');


if (! function_exists('pixobe_theme_setup')) :
    function pixobe_theme_setup()
    {
        wp_enqueue_style(
            'pixobe_theme_style',
            get_template_directory_uri() . '/assets/css/main.css'
        );
    }
endif;
add_action('wp_enqueue_scripts', 'pixobe_theme_setup');

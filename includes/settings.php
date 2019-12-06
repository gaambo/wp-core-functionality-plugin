<?php

namespace CoreFunctionality\Settings;

/**
 * Register options page with ACF
 *
 */
function registerOptionsPage()
{
    $options_page = acf_add_options_page([
        'page_title' => __('Custom Settings', 'core-functionality'),
        'menu_title' => __('Custom Settings', 'core-functionality'),
        'menu_slug' => 'custom-settings',
        'capability' => 'edit_custom_settings',
        'icon_url' => 'dashicons-admin-settings',
        'redirect' => true,
    ]);

    $options_page = acf_add_options_sub_page([
        'page_title' => __('General Settings', 'core-functionality'),
        'menu_title' => __('General', 'core-functionality'),
        'menu_slug' => 'intact-settings_general',
        'parent_slug' => 'custom-settings',
        'capability' => 'edit_custom_settings',
    ]);
}
add_action('acf/init', 'CoreFunctionality\Settings\registerOptionsPage');

/**
 * Tell ACF to load acf-json files from this mu-plugin
 *
 */
function loadAcfJson($paths)
{
    $paths[] = CORE_FUNCTIONALITY_PATH . 'acf-json';
    return $paths;
}
add_filter('acf/settings/load_json', 'CoreFunctionality\Settings\loadAcfJson');

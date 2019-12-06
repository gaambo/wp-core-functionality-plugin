<?php

namespace CoreFunctionality\Disable;

/**
 * Removes unused WordPress features
 * like archives, search, author archives etc.
 *
 * @param [type] $query
 * @param boolean $error
 * @return void
 */
function remove_unused_features($query, $error = true)
{
    if (!$query->is_main_query()) {
            return;
    }
    
    if (is_admin()) {
        return;
    }

    if (defined('REST_REQUEST') && REST_REQUEST) {
        return;
    }
    
    if ($query->is_search()) {
        $query->is_search = false;
        $query->query_vars['s'] = false;
        $query->query['s'] = false;
        if ($error == true) {
            $query->is_404 = true;
        }
    } elseif ($query->is_date() || $query->is_tax() || $query->is_author()) {
        $query->is_archive = false;
        $query->is_date = false;
        $query->is_tax = false;
        $query->is_category = false;
        $query->is_author = false;
        if ($error == true) {
            $query->is_404 = true;
        }
    }
}
add_action('parse_query', 'CoreFunctionality\Disable\remove_unused_features');
add_filter('get_search_form', '__return_empty_string');

// remove emoji scripts
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');

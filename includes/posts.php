<?php
/**
 * Contains filters/hooks/functions for changing the default post type
 */

namespace CoreFunctionality\Posts;

/**
 * Disable post_tag taxonomy for posts
 */
function unregisterTaxonomies()
{
    unregister_taxonomy_for_object_type('post_tag', 'post');
}
add_action('init', __NAMESPACE__ . '\unregisterTaxonomies');

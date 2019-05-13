<?php

namespace CoreFunctionality\CustomPostType;

/**
 * Registers the Custom Post Type
 * Called on WordPress init Hook
 */
function registerPostType()
{
    // Use GenerateWP for generating code for custom post type
    // https://generatewp.com/post-type/
}
add_action('init', '\\CoreFunctionality\\CustomPostType\\registerPostType');

/**
 * Registers the Custom Taxonomy
 * Called on WordPress init hook
 */
function registerTaxonomy()
{

    // Use GenerateWP for generating code for custom taxonomy
    // https://generatewp.com/taxonomy/
}
add_action('init', '\\CoreFunctionality\\CustomPostType\\registerTaxonomy');

<?php

namespace CoreFunctionality\Page;

/**
 * Remove featured image from pages
 */
add_action('init', function () {
    remove_post_type_support('page', 'thumbnail');
});

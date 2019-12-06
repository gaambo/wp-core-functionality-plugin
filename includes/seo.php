<?php

namespace CoreFunctionality\Seo;

/**
 * Fix real id used by seo framework on home page
 * otherwise it uses data from first post because is_archive is false on home
 */
add_filter('the_seo_framework_real_id', function ($id) {
    if (is_home() && $blogPage = get_option('page_for_posts')) {
        return $blogPage;
    }
    return $id;
});

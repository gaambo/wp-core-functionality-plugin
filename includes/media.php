<?php

namespace CoreFunctionality\Media;

/**
 * Add SVG upload support;
 */
add_filter('upload_mimes', function ($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    $mimes['zip'] = 'application/zip';
    return $mimes;
});

/**
 * Fix MIME Type check
 * @see https://de.wordpress.org/support/topic/svg-upload-wp-5-0-1/
 */
add_filter(
    'wp_check_filetype_and_ext',
    function ($data, $file, $filename, $mimes) {
        $wp_filetype = wp_check_filetype($filename, $mimes);
        $ext = $wp_filetype['ext'];
        $type = $wp_filetype['type'];
        $proper_filename = $data['proper_filename'];
        return compact('ext', 'type', 'proper_filename');
    },
    10,
    4
);

<?php

namespace CoreFunctionality;

/**
 * Dont Update the Plugin if there is a plugin in the WordPress repository with the same name.
 *
 * @param  array $r Existing request arguments
 * @param  string $url Request URL
 * @return array Filtered request arguments
 */
function dontUpdatePlugin($r, $url)
{
    if (0 !== strpos($url, 'https://api.wordpress.org/plugins/update-check/')) {
        return $r; // Not a plugin update request. Bail immediately.
    }
    $plugins = json_decode($r['body']['plugins'], true);
    unset($plugins['plugins'][plugin_basename(__FILE__)]);
    $r['body']['plugins'] = json_encode($plugins);
    return $r;
}
add_filter('http_request_args', '\\CoreFunctionality\\dontUpdatePlugin', 5, 2);

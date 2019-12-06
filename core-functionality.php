<?php

namespace CoreFunctionality;

/**
 * Plugin Name: Core Functionality
 * Description: This contains all your site's core functionality so that it is theme independent.
 * Version: 1.1.0
 * Author: Fabian Todt
 *
 */

require_once __DIR__ . "/vendor/autoload.php";
define('CORE_FUNCTIONALITY_PATH', plugin_dir_path(__FILE__));

// required + bootstrap
require_once(CORE_FUNCTIONALITY_PATH . 'includes/tgm-plugin-activation.php');
require_once(CORE_FUNCTIONALITY_PATH . 'includes/general.php');
require_once(CORE_FUNCTIONALITY_PATH . 'includes/requirements.php');

require_once(CORE_FUNCTIONALITY_PATH . 'includes/admin.php');
require_once(CORE_FUNCTIONALITY_PATH . 'includes/disable.php');
require_once(CORE_FUNCTIONALITY_PATH . 'includes/media.php');
require_once(CORE_FUNCTIONALITY_PATH . 'includes/page.php');
require_once(CORE_FUNCTIONALITY_PATH . 'includes/posts.php');
require_once(CORE_FUNCTIONALITY_PATH . 'includes/seo.php');
require_once(CORE_FUNCTIONALITY_PATH . 'includes/settings.php');

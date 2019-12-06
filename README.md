# WordPress Core Functionality Plugin

A must-use Plugin for your WordPress website projects to contain all site-specific functionality. This way it is theme independent and always enabled. Based on [gaambos Core Functionality Plugin](https://github.com/gaambo/wp-core-functionality-plugin).

# Usage and Development

The plugin contains some examples for implementing typical things: 

- `general.php` contains some code for handling the mu-plugin activation
- `roles.php` contains code for adding custom roles/capabilities and editing existing ones
- `requirements.php` contains the code for defining **required plugins** via [TGMPA](https://github.com/TGMPA/TGM-Plugin-Activation) (also see `tgm-plugin-activation.php`)
- `disable.php` contains code for disabling unused WordPress core functionality (e.g. search, archives,...)
- `settings.php` sets up the custom settings/options pages built with ACF
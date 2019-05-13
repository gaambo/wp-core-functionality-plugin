# WordPress Core Functionality Plugin

A must-use Plugin for your WordPress website projects to contain all site-specific functionality. This way it is theme independent and always enabled.

# Installation

Clone the repository from Github into the `mu-plugins` or download the repository and unpack it into the `mu-plugins` folder.
This plugin serves as a boilerplate so there's no sense in keeping it as a git-submodule (except in other boilerplates).

# Usage and Development

## Examples 

The plugin contains some examples for implementing typical things: 

- `general.php` contains some code for handling the mu-plugin activation
- `roles.php` contains code for adding custom roles/capabilities and editing existing ones
- `custom-post-type.php` is used for registering custom post types & taxonomies
- `requirements.php` contains the code for defining **required plugins** via [TGMPA](https://github.com/TGMPA/TGM-Plugin-Activation) (also see `tgm-plugin-activation.php`)

## Other Things

Here are some other things you might want to implement in this plugin:

- Remove unused WordPress core functionality
- Redirect unused WordPress routes (archives,...)
- Customization of WP-Admin
- Custom roles and capabilities
- Custom post types and taxonomies
- Custom Rest-API Endpoints
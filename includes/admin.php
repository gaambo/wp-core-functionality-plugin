<?php

namespace CoreFunctionality\Admin;

/**
 * Adds some useful tinmyce toolbar modes to ACFs WYSIWYG field:
 *
 * 1. Link only
 * 2. Basic text formatting only
 * 3. simple (basic text formatting, link, list, removeformat)
 * 4. Extended (simple + blockquote + formatselect)
 *
 * @param array $toolbars
 * @return array $toolbars
 */
function addSimpleTinymceToolbars($toolbars)
{
    $link_only = [];
    $link_only[1] = [
        "link",
        "undo",
        "redo"
    ];
    $toolbars['Link Only'] = $link_only;

    $text_only = [];
    $text_only[1] = [
        "bold",
        "italic",
        "underline",
        "undo",
        "redo",
    ];
    $toolbars['Text Only'] = $text_only;

    $simple_toolbar = [];
    $simple_toolbar[1] = [
        "bold",
        "italic",
        "underline",
        "bullist",
        "numlist",
        "link",
        "undo",
        "redo",
        "removeformat"
    ];
    $toolbars['Simple'] = $simple_toolbar;

    $extended_toolbar = [];
    $extended_toolbar[1] = [
        "formatselect",
        "bold",
        "italic",
        "underline",
        "bullist",
        "numlist",
        "link",
        "blockquote",
        "undo",
        "redo",
        "removeformat"
    ];
    $toolbars['Extended'] = $extended_toolbar;

    return $toolbars;
}
add_filter('acf/fields/wysiwyg/toolbars', __NAMESPACE__ . '\addSimpleTinymceToolbars');

/**
 * Remove ancient Custom Fields Metabox because it's slow and most often useless anymore
 * ref: https://core.trac.wordpress.org/ticket/33885
 */
function removeCustomFieldsMetaBox()
{
    foreach (get_post_types('', 'names') as $post_type) {
        remove_meta_box('postcustom', $post_type, 'normal');
    }
}
add_action('admin_menu', __NAMESPACE__ . '\removeCustomFieldsMetaBox');

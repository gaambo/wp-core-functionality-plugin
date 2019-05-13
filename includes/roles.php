<?php

namespace CoreFunctionality\Roles;

// add_action( 'admin_init', 'CoreFunctionality\\Roles\\init_roles' ); // only run on changes/updates


/**
 * Sets up the custom roles and capabilities of this site
 *
 * Should be run on admin_init hook
 * For performance reason only run it on updates/changes
 *
 * @return void
 */
function setup()
{
    removeUnusedROles();
    createSpecialRole();
    addCapabilitiesToAdmin();
}

/**
 * Removes unused default roles or roles added by plugins
 *
 */
function removeUnusedROles()
{
    // remove default unused roles
    remove_role('subscriber');
}

/**
 * Adds a special role and adds capabilities to it
 *
 * Should be run on admin_init
 * Checks if the role already exists, otherwiste it creats it
 *
 */
function createSpecialRole()
{
    $special_role = get_role('special');
    if (! $special_role) {
        $special_role = add_role('special', __('Special Role', 'core-functionality'), array());
    }
    $special_capabilities = array(
        'read'                   => true,
        'level_1'                => true,
        'upload_files'           => true,
        'manage_privacy_options' => true,
        // jobs
        'edit_job'               => true,
        'edit_jobs'              => true,
        'edit_others_jobs'       => true,
        'edit_published_jobs'    => true,
        'publish_jobs'           => true,
        'read_job'               => true,
        'read_private_jobs'      => true,
        'delete_job'             => true,
        'delete_jobs'            => true,
        'delete_others_jobs'     => true,
        'delete_published_jobs'  => true,
        'delete_private_jobs'    => true,
    );
    foreach ($special_capabilities as $cap => $allow) {
        $special_role->add_cap($cap, $allow);
    }
}

/**
 * Adds custom capabilities to the existing core role administrator
 *
 * @return void
 */
function addCapabilitiesToAdmin()
{
    $admin = get_role('administrator');
    $admin_capabilities = array(
        // jobs
        'edit_job',
        'edit_jobs',
        'edit_others_jobs',
        'publish_jobs',
        'read_job',
        'read_private_jobs',
        'delete_job',
    );
    foreach ($admin_capabilities as $cap) {
        $admin->add_cap($cap, true);
    }
}

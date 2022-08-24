<?php

/**
 * @package  JsonLDForWP
 */

defined('WP_UNINSTALL_PLUGIN') || die;

global $wpdb;

$wpdb->query("DELETE FROM wp_options WHERE option_name LIKE 'jsonld-for-wordpress%'");

if (config('environment', 'environment') === 'local' || isRunningTest()) die;

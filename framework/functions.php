<?php

use JsonLDForWP\JsonLDForWP;

/**
 * ##### SETUP #####
 */

// ##### TEMPLATE ENGINE #####
/**
 * @var Latte\Engine
 */
$latte = new Latte\Engine();
$latte->setTempDirectory(JsonLDForWP::FRAMEWORK_PATH . "temp");

/**
 * ##### END SETUP #####
 */

function admin_asset(string $path, array $data = []) {
    if (empty($path)) throw new RuntimeException(sprintf(__("%s needs a valid path. Empty path passed."), __FUNCTION__));
    global $latte;
    $latte->render(JsonLDForWP::ASSETS_PATH . "/admin/$path.latte", $data);
}

function slugify(string $string): string {
    if (empty($string)) throw new RuntimeException(sprintf(__("%s needs a valid string. Empty string passed."), __FUNCTION__));
    $slug = strtolower($string);
    $slug = sanitize_title($slug);
    $slug = str_replace(['_', ' '], '-', $slug);
    if (empty($slug)) throw new RuntimeException(sprintf(__("An error occurred while converting a string to a slug. Passed string: %s"), $string));
    return $slug;
}

function build_settings(string $page_slug, string $submit_text = null): void {
    if (isset($_GET['settings-updated'])) add_settings_error(JsonLDForWP::TEXT_DOMAIN . '-messages', JsonLDForWP::TEXT_DOMAIN . '_message', __('Settings Saved'), 'updated');
    settings_errors(JsonLDForWP::TEXT_DOMAIN . '_message');
    echo '<form action="options.php" method="post">';
    settings_fields($page_slug);
    do_settings_sections($page_slug);
    submit_button($submit_text ?? __('Save'));
    echo '</form>';
}

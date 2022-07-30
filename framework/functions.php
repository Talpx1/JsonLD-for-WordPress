<?php

use JsonLDForWP\JsonLDForWP;

/**
 * Render a Latte asset located in assets/admin.
 *
 * @param string $path path of the assets inside assets/admin.
 * @param array $data data in key=>value format to pass to the Latte template. Passed data is available in the template using $key.
 * @return void
 */
function admin_asset(string $path, array $data = []) {
    if (empty($path)) throw new RuntimeException(sprintf(__("%s needs a valid path. Empty path passed."), __FUNCTION__));
    global $latte;
    $latte->render(JsonLDForWP::ASSETS_PATH . "/admin/$path.latte", $data);
}

/**
 * Tries to create a valid slug starting from a string.
 * This function makes use of WordPress's sanitize_title function.
 * @see https://developer.wordpress.org/reference/functions/sanitize_title/
 *
 * @param string $string the string to convert in slug.
 * @return string
 */
function slugify(string $string): string {
    if (empty($string)) throw new RuntimeException(sprintf(__("%s needs a valid string. Empty string passed."), __FUNCTION__));
    $slug = strtolower($string);
    $slug = sanitize_title($slug);
    $slug = str_replace(['_', ' '], '-', $slug);
    if (empty($slug)) throw new RuntimeException(sprintf(__("An error occurred while converting a string to a slug. Passed string: %s"), $string));
    return $slug;
}

/**
 * Render the settings form used in Wordpress settings pages.
 * This function ss intended to be used in Latte templates.
 *
 * @param string $page_slug slug of the setting page, available in Latte page templates via the $page_slug variable.
 * @param string|null $submit_text text to use for the 'submit'/'save' button.
 * @return void
 * 
 * @see https://developer.wordpress.org/reference/functions/add_settings_error/
 * @see https://developer.wordpress.org/reference/functions/settings_errors/
 * @see https://developer.wordpress.org/reference/functions/settings_fields/
 * @see https://developer.wordpress.org/reference/functions/do_settings_sections/
 * @see https://developer.wordpress.org/reference/functions/submit_button/
 */
function build_settings(string $page_slug, string $submit_text = null): void {
    if (isset($_GET['settings-updated'])) add_settings_error(JsonLDForWP::TEXT_DOMAIN . '-messages', JsonLDForWP::TEXT_DOMAIN . '_message', __('Settings Saved'), 'updated');
    settings_errors(JsonLDForWP::TEXT_DOMAIN . '_message');
    echo '<form action="options.php" method="post">';
    settings_fields($page_slug);
    do_settings_sections($page_slug);
    submit_button($submit_text ?? __('Save'));
    echo '</form>';
}

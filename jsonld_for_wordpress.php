<?php

declare(strict_types=1);

namespace JsonLDForWP;

use JsonLDForWP\Framework\Settings\Enums\SettingTypes;
use JsonLDForWP\Framework\Settings\Setting;
use JsonLDForWP\Framework\Settings\SettingsPage;
use JsonLDForWP\Framework\Settings\SettingsSection;
use RuntimeException;

/**
 * @package   JsonLDForWP
 * @author    Talp1 <https://github.com/Talpx1>
 * @copyright 2022 Talp1
 * @license   All Rights Reserved
 */

/*
Plugin Name: JsonLD for WordPress
Plugin URI: https://github.com/Talpx1/JsonLD-for-WordPress
Description: [BETA] Easily setup and manage JsonLD from your wordpress admin area
Version: 0.1
Author: Talp1
Author URI: https://github.com/Talpx1
License: All Rights Reserved
Text Domain: jsonld-for-wordpress
Domain Path: /languages
*/

/*
All Rights Reserved
Copyright (c) 2022 Talp1
Talp1, owner of this software, owns all the rights for it.
The software MUST NOT be copied, sold or distributed without explicit permission form Talp1
THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
*/
defined('ABSPATH') || die('[JsonLD for WordPress] Direct access is not allowed!');

$autoloader = __DIR__.'/vendor/autoload.php';
if (file_exists($autoloader) && is_readable($autoloader)) {
    require_once $autoloader;
} else {
    throw new RuntimeException(sprintf(__("[JsonLD for WordPress] Can't require the autoloader in %s, it's either missing or non-readable. Check the autoloader in %s", 'jsonld-for-wordpress'), basename(__FILE__), $autoloader));
}

require_once __DIR__.'/framework/bootstrap.php';

class JsonLDForWP {
    public static $UID;
    public static $ROOT_URL = null;
    private static $instance = null;

    private function __construct() {
        self::$ROOT_URL = plugin_dir_url(__FILE__);
        self::$UID = plugin_basename(__FILE__);

        $this->createMenus();
        $this->createSettings();
    }

    public function checkEnvironment() {
        if (!version_compare(PHP_VERSION, config('enviroment', 'min_php_version'), '>=')) {
            throw new RuntimeException(sprintf(__('In order to run this plugin, PHP version %s (or higher) is required. Your current PHP version is %s. Please update PHP.'), config('enviroment', 'min_php_version'), PHP_VERSION));
        }
        if (!version_compare(get_bloginfo('version'), config('enviroment', 'min_wordpress_version'), '>=')) {
            throw new RuntimeException(sprintf(__('In order to run this plugin, WordPress version %s (or higher) is required. Your current WordPress version is %s. Please update WordPress.'), config('enviroment', 'min_wordpress_version'), get_bloginfo('version')));
        }
    }

    public function createMenus() {
    }

    public function createSettings() {
        $settings_page = SettingsPage::create('JsonLD', 'pages/settings')->setSlug('settings')->setCapability('manage_options')->build();

        $priority_section = SettingsSection::create(__('Priority', 'jsonld-for-wordpress'), 'priority', $settings_page)->register();

        $with = ['options' => [
            __('CPT Settings', 'jsonld-for-wordpress') => 'cpt',
            __('Category Settings', 'jsonld-for-wordpress') => 'category',
            __('Post Settings', 'jsonld-for-wordpress') => 'post',
        ]];

        Setting::create($priority_section, 'Priority 1', 'priority-1')->setType(SettingTypes::SELECT)->with($with)->register();
        Setting::create($priority_section, 'Priority 2', 'priority-2')->setType(SettingTypes::SELECT)->with($with)->register();
        Setting::create($priority_section, 'Priority 3', 'priority-3')->setType(SettingTypes::SELECT)->with($with)->register();

        $cpt_section = SettingsSection::create(__('CPT Settings', 'jsonld-for-wordpress'), 'cpt-settings', $settings_page)->register();
        Setting::create($cpt_section, 'Select CPT', 'cpt')->setType(SettingTypes::SELECT)->with(['options' => get_post_types(['public' => true])])->register();
    }

    public function pluginActivate() {
        if (!current_user_can('activate_plugins')) {
            return;
        }

        try {
            $this->checkEnvironment();
        } catch (RuntimeException $e) {
            die($e->getMessage());
        }
    }

    public function pluginDeactivate() {
        if (!current_user_can('activate_plugins')) {
            return;
        }
    }

    public static function instance() {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}

if (!class_exists('JsonLDForWP\\JsonLDForWP')) {
    die('[JsonLD for WordPress] Unable to initialize!');
}

register_activation_hook(__FILE__, [JsonLDForWP::instance(), 'pluginActivate']);
register_deactivation_hook(__FILE__, [JsonLDForWP::instance(), 'pluginDeactivate']);

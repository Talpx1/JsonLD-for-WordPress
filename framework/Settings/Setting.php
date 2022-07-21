<?php

namespace JsonLDForWP\Framework\Settings;

use JsonLDForWP\Framework\Settings\Enums\SettingsGroups;
use JsonLDForWP\Framework\Settings\Enums\SettingTypes;
use JsonLDForWP\JsonLDForWP;
use RuntimeException;
use TypeError;

class Setting {

    private string $section;
    private string $page;
    private string $name;
    private string $title;
    private string|null $type = null;
    private string|null $description = null;
    private bool|null $show_in_rest = null;
    private mixed $default = null;
    private string|null $sanitize_callback = null;
    private string $class = '';
    private array|null $template = null;

    public static function create(SettingsSection|SettingsGroups|string $section, string $title): self {
        return new self($section, $title);
    }

    private function __construct(SettingsSection|SettingsGroups|string $section, string $title) {
        if (is_a($section, SettingsGroups::class)) {
            $this->section = $section->value;
            $this->page = $section->value;
        } elseif (is_a($section, SettingsSection::class)) {
            $this->section = $section->slug();
            $this->page = $section->page();
        } else {
            $this->section = $section;
            $this->page = $section;
        }

        $this->title = $title;
        $this->name = JsonLDForWP::TEXT_DOMAIN . '-' . slugify($title);
    }

    public function setType(SettingTypes $type): self {
        $this->type = $type->realValue();
        $this->sanitize_callback = $type->sanitizeCallback();
        $this->template = $type->template();
        return $this;
    }

    public function setPage(string $page): self {
        $this->page = $page;
        return $this;
    }

    public function setName(string $name): self {
        $this->name = $name;
        return $this;
    }

    public function setDescription(string $description): self {
        $this->description = $description;
        return $this;
    }

    public function setDefault(mixed $default): self {
        if (isset($this->type) && gettype($default) !== $this->type) throw new TypeError(sprintf(__("The type of the default value does not match the type specified fot the setting. Default value type is %s, the specified type is %s."), gettype($default), $this->type));

        $this->default = $default;
        return $this;
    }

    public function setShowInRest(bool $show_in_rest): self {
        $this->show_in_rest = $show_in_rest;
        return $this;
    }

    public function setTemplate(string $path, array $data = []): self {
        $this->template = ['path' => $path, 'data' => $data];
        return $this;
    }

    public function setClass(string $class): self {
        $this->class = $class;
        return $this;
    }

    public function register(callable|string|null $sanitize_callback = null): void {
        $args = [];
        if (isset($this->type)) $args['type'] = $this->type;
        if (isset($this->description)) $args['description'] = $this->description;

        if (isset($sanitize_callback)) {
            if (is_string($sanitize_callback) && !function_exists($sanitize_callback)) throw new RuntimeException(sprintf(__("Invalid sanitize callback: a function named %s can not be found."), $sanitize_callback));
            $args['sanitize_callback'] = $sanitize_callback;
        } elseif (isset($this->sanitize_callback)) $args['sanitize_callback'] = $this->sanitize_callback;

        if (isset($this->show_in_rest)) $args['show_in_rest'] = $this->show_in_rest;
        if (isset($this->default)) $args['default'] = $this->default;

        add_action("admin_init", fn () => register_setting($this->section, $this->name, $args));

        if (!isset($this->template))
            throw new RuntimeException(__("No setting template defined or available. Sometimes templates gets automatically set when specifying the type (setType) of the option. Alternatively define a template calling the 'setTemplate(path, data)' method on a Setting instance."));

        add_action("admin_init", fn () => add_settings_field(
            $this->name,
            $this->title,
            fn ($args) => admin_asset($this->template['path'], array_merge($args, $this->template['data'])),
            $this->page,
            $this->section,
            ['label_for' => $this->name, 'class' => $this->class]
        ));
    }
}
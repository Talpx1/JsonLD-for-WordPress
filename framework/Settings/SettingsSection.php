<?php

namespace JsonLDForWP\Framework\Settings;

use JsonLDForWP\JsonLDForWP;

class SettingsSection {

    private string $title;
    private string $slug;
    private string|null $description = null;
    private string $page;

    public static function create(string $title, string $page): self {
        return new self($title, $page);
    }

    private function __construct(string $title, string $page) {
        $this->title = $title;
        $this->page = $page;
        $this->slug = JsonLDForWP::TEXT_DOMAIN . '-' . slugify($title);
    }

    public function setSlug(string $slug): self {
        $this->slug = JsonLDForWP::TEXT_DOMAIN . '-' . slugify($slug);
        return $this;
    }

    public function slug(): string {
        return $this->slug;
    }

    public function page(): string {
        return $this->page;
    }

    public function setDescription(string $description): self {
        $this->description = $description;
        return $this;
    }

    public function register(): void {
        add_action("admin_init", fn () => add_settings_section(
            $this->slug,
            $this->title,
            isset($this->description) ? (fn () => $this->description) : null,
            $this->page
        ));
    }
}

<?php

namespace JsonLDForWP\Framework;

use JsonLDForWP\JsonLDForWP;

class MenuPage {
    private string $page_title;
    private string $menu_title;
    private string $capability = "edit_posts";
    private string $menu_slug;
    private string $template;
    private string $icon_url = '';
    private int|null $position = null;
    private array $data = [];

    public static function create(string $menu_title, string $template): self {
        return new self($menu_title, $template);
    }

    private function __construct(string $menu_title, string $template) {
        $this->menu_title = $menu_title;
        $this->page_title = $menu_title;
        $this->menu_slug = JsonLDForWP::TEXT_DOMAIN . '-' . slugify($menu_title);
        $this->template = $template;
    }

    public function setPageTitle(string $page_title): self {
        $this->page_title = $page_title;
        return $this;
    }

    public function setCapability(string $capability): self {
        $this->capability = $capability;
        return $this;
    }

    public function setSlug(string $menu_slug): self {
        $this->menu_slug = JsonLDForWP::TEXT_DOMAIN . '-' . slugify($menu_slug);
        return $this;
    }

    public function slug(): string {
        return $this->menu_slug;
    }

    public function setIcon(string $icon_url): self {
        $this->icon_url = $icon_url;
        return $this;
    }

    public function setPosition(int $position): self {
        $this->position = $position;
        return $this;
    }

    public function with(array $data): self {
        $this->data = $data;
        return $this;
    }

    public function isSettingsPage(): self {
        $this->data['settings'] = $this->menu_slug;
        return $this;
    }

    public function build(): void {
        add_action('admin_menu', fn () => add_menu_page(
            $this->page_title,
            $this->menu_title,
            $this->capability,
            $this->menu_slug,
            fn () => admin_asset($this->template, $this->data),
            $this->icon_url,
            $this->position,
        ));
    }
}

<?php

use JsonLDForWP\JsonLDForWP;

function twig() {
    $loader = new \Twig\Loader\FilesystemLoader(JsonLDForWP::ASSETS_PATH);
    return $twig = new \Twig\Environment($loader);
}

function admin_asset(string $path, array $data = null) {
    echo twig()->render("admin/$path.html.twig", $data);
}

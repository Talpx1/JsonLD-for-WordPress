<?php

use JsonLDForWP\JsonLDForWP;

// ##### TEMPLATE ENGINE #####
/**
 * @var Latte\Engine
 */


$latte = new Latte\Engine();
$latte->setTempDirectory(JsonLDForWP::FRAMEWORK_PATH . "temp");

// ##### FAKER #####
/**
 * @var Faker\Generator
 */
$faker = \Faker\Factory::create();

require_once(__DIR__ . "/functions.php");

<?php declare(strict_types=1);

use Doctrine\Inflector\InflectorFactory;
use JsonLDForWP\Tools\EntitiesGenerator\Generator;
use Symfony\Component\Panther\Client;

require __DIR__.'/../../vendor/autoload.php';
    
/**
 * @var \Symfony\Component\Panther\Client
 */
$client = Client::createFirefoxClient(__DIR__.'/drivers/geckodriver.exe');

/**
 * @var \Doctrine\Inflector\Inflector;
 */
$inflector = InflectorFactory::create()->build();

Generator::generate();
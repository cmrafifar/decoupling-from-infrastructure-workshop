<?php
declare(strict_types=1);

use DevPro\Infrastructure\AbstractDevelopmentServiceContainer;
use DevPro\Infrastructure\ContainerConfiguration;
use Symfony\Component\ErrorHandler\Debug;

require __DIR__ . '/../vendor/autoload.php';

$environment = $_COOKIE['environment'] ?? 'development';

$container = AbstractDevelopmentServiceContainer::create(
    ContainerConfiguration::create(
        $environment,
        __DIR__ . '/../',
        getenv()
    )
);

if ($environment === 'development') {
    Debug::enable();
}

$container->webApplication()->run();

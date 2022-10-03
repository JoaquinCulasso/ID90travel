<?php

declare(strict_types=1);

use Id90travel\web\App;
use Id90travel\web\Router;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

require_once __DIR__ . '/../bootstrap.php';

$router = new Router();
$app = new App($router, ['uri' => $_SERVER['REQUEST_URI'], 'method' => $_SERVER['REQUEST_METHOD']]);
try {
    $app->run();
    exit();
} catch (NotFoundExceptionInterface|ContainerExceptionInterface $e) {
}



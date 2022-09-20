<?php

declare(strict_types=1);

namespace Id90travel\web;

use DI\ContainerBuilder;
use Id90travel\web\view\View;
use Psr\Container\ContainerInterface;

final class App
{

    public function __construct()
    {
        $containerBuilder = new ContainerBuilder();
        $containerBuilder->useAutowiring(true);
        $containerBuilder->addDefinitions(APP_DIRECTORY . '/config/services.php');
        $containerBuilder->build();
    }

    public static function getControllerForFront(mixed $controller)
    {
        return self::getContainerForFront()->get($controller);
    }

    public static function getContainerForFront(): ContainerInterface
    {
        $containerBuilder = new ContainerBuilder();
        $containerBuilder->useAutowiring(true);
        $containerBuilder->addDefinitions(APP_DIRECTORY . '/config/services.php');
        return $containerBuilder->build();
    }

    public function run(): void
    {
        echo View::make('auth');
    }
}
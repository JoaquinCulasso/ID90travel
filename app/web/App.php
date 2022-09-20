<?php

declare(strict_types=1);

namespace Id90travel\web;

use DI\ContainerBuilder;
use Id90travel\web\view\View;
use Exception;
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
//        $controllersByCommands = require APP_DIRECTORY . '/config/controllers.php';
//        $controllerClass = $controllersByCommands[$controller] ?? null;
//        var_dump($controller);
////        if ($controllerClass === null) {
////            throw new ControllerNotFoundException('controller not found');
////        }
        return self::getContainerForFront()->get($controller);//  $this->getContainer()->get();
    }

    /**
     * @throws Exception
     */
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
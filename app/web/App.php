<?php

declare(strict_types=1);

namespace Id90travel\web;

use DI\ContainerBuilder;
use Id90travel\web\controller\RouteNotFoundException;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\ContainerInterface;
use Psr\Container\NotFoundExceptionInterface;

final class App
{

    private Router $router;
    private array $request;

    public function __construct(Router $router, array $request)
    {
        $this->router = $router;
        $this->request = $request;
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function run(): void
    {
        $this->router->resolve($this->request['uri'], $this->request['method']);
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
}
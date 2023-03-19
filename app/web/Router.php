<?php

declare(strict_types=1);

namespace Id90travel\web;

use DI\ContainerBuilder;
use Exception;
use Id90travel\web\exception\ContentTypeException;
use Id90travel\web\exception\ControllerNotFoundException;
use Id90travel\web\exception\HttpMethodNotFoundException;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\ContainerInterface;
use Psr\Container\NotFoundExceptionInterface;

class Router
{

    /**
     * @throws Exception
     */
    public function getContainer(): ContainerInterface
    {
        $containerBuilder = new ContainerBuilder();
        $containerBuilder->useAutowiring(true);
        $containerBuilder->addDefinitions(APP_DIRECTORY . '/config/services.php');
        return $containerBuilder->build();
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     * @throws ControllerNotFoundException
     * @throws Exception
     */
    public function getController(string $key, string $methodName, string $httpMethod)
    {
        $controllersMap = require APP_DIRECTORY . '/config/controllers.php';

        $controllerConfig = $controllersMap[$key] ?? null;

        if ($controllerConfig === null) {
            throw new ControllerNotFoundException();
        }

        $controllerClass = key($controllerConfig);
        $methodController = $controllerConfig[$controllerClass];

        $action = array($methodName, $httpMethod);

        if (!in_array($action, $methodController)) {
            throw new HttpMethodNotFoundException();
        }

        return $this->getContainer()->get($controllerClass);
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     * @throws Exception
     */
    public function resolve(string $requestUri, string $requestMethod): void
    {
        $request = substr($requestUri, strlen(FOLDER_PATH));
        $route = explode('?', $request)[0];

        $routeExplode = explode('/', $route);
        $controller = $routeExplode[0];
        $method = $routeExplode[1] ?? null;
        $params = $_GET;

        $data = json_decode(file_get_contents('php://input'), true);
        if ($data) {
            $headers = apache_request_headers();
            if ($headers['Content-Type'] !== 'application/json') {
                throw new ContentTypeException('Only Content-Type application/json', 500);
            }
        }
        $controllerExecute = $this->getController($controller, $method, $requestMethod);


        if ($params) {
            $controllerExecute->$method($params);
            exit();
        }
        if ($data) {
            $controllerExecute->$method($data);
            exit();
        }
        $controllerExecute->$method();
        exit();
    }


}
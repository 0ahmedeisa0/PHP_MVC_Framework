<?php

namespace Illuminates\Router;

class Router {
    protected static $routes = [
        'GET' => [],
        'POST' => [],
        'PUT' => [],
        'PATCH' => [],
        'DELETE' => []
    ];


    public static function add(string $method, string $uri, $controller , $action  , array $middleware = []) {
        $uri = ltrim($uri, '/');



        if (is_callable($controller)) {
            static::$routes[$method][$uri] = [
                'controller' => $controller,
                'action' => null,
                'middleware' => $middleware
            ];
        } else {
            static::$routes[$method][$uri] = compact('controller', 'action', 'middleware');
        }
    }


    public  function routes() {
        return self::$routes;
    }

    public static function  dispatch() {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = $_SERVER['REQUEST_URI'];
        
        $uri = str_replace('/public/', '/', $uri);
        
        $uri = ltrim($uri, '/');
        

        if (!isset(static::$routes[$method][$uri])) {
            http_response_code(404);
             return"404 - Route Not Found";
            
        }

        $route = static::$routes[$method][$uri];

        if (is_callable($route['action'])) {
            $action = $route['action'];
            return $action();
        } else if ($route['controller'] !== null && method_exists($route['controller'], $route['action'])) {
            $controller = new $route['controller'];
            $action = $route['action'];
            return $controller->$action();
        } else {
            http_response_code(500);
            return "Error: Invalid route action.";
        }
        

    }
}
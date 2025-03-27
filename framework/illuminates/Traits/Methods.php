<?php

namespace Illuminates\Traits;

use Illuminates\Router\Router;

trait Methods
{
    public static function get($uri, $controller, $action = null, $middleware = []) {
   
        if ($controller instanceof \Closure) {
            $action = $controller;
            $controller = null; 
        }
        
        Router::add('GET', $uri, $controller, $action, $middleware);
    }

    public static function post($uri, $controller, $action = null, $middleware = []) {
        if ($controller instanceof \Closure) {
            $action = $controller;
            $controller = null;
        }
        
        Router::add('POST', $uri, $controller, $action, $middleware);
    }

    public static function put($uri, $controller, $action = null, $middleware = []) {
        if ($controller instanceof \Closure) {
            $action = $controller;
            $controller = null;
        }
        
        Router::add('PUT', $uri, $controller, $action, $middleware);
    }

    public static function patch($uri, $controller, $action = null, $middleware = []) {
        if ($controller instanceof \Closure) {
            $action = $controller;
            $controller = null;
        }
        
        Router::add('PATCH', $uri, $controller, $action, $middleware);
    }

    public static function delete($uri, $controller, $action = null, $middleware = []) {
        if ($controller instanceof \Closure) {
            $action = $controller;
            $controller = null;
        }
        
        Router::add('DELETE', $uri, $controller, $action, $middleware);
    }
}

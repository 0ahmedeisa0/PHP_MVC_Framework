<?php

namespace Illuminates\Traits;

trait Methods
{
   
    public  static function get($uri, $controller, $action,$middleware = []) {
        parent::add('GET', $uri, $controller, $action,$middleware);
    }

    public static function post($uri, $controller, $action,$middleware = []) {
        parent::add('POST', $uri, $controller, $action,$middleware);
    }

    public static function put($uri, $controller, $action,$middleware = []) {
        parent::add('PUT', $uri, $controller, $action,$middleware);
    }

    public static function patch($uri, $controller, $action,$middleware = []) {
        parent::add('PATCH', $uri, $controller, $action,$middleware);
    }

    public static function delete($uri, $controller, $action,$middleware = []) {
        parent::add('DELETE', $uri, $controller, $action,$middleware);
    }
}
<?php

namespace Illuminates;



use Illuminates\Router\Route;

class Application
{


    public function run()
    {
        
        $config = config('routes');

        
        foreach ($config['routes'] as $routeFile) {
            $filePath = base_path("{$config['path']}/{$routeFile}");
            if (file_exists($filePath)) {
                include $filePath;
            }
        }
    }

    public function __destruct()
    {
        
        $response = Route::dispatch();
        echo $response;
    }
}

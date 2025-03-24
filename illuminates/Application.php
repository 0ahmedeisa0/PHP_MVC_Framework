<?php

namespace Illuminates;



use Illuminates\Router\Route;

class Application
{


    public function run()
    {
        include __DIR__ . '/../routes/web.php';
        
        
        
    }

    public function __destruct()
    {
        
        $response = Route::dispatch();
        echo $response;
    }
}

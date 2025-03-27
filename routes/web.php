<?php

use App\Http\Controllers\HomeController;
use Illuminates\Router\Route;

Route::add('GET', '/', '', function () {
    return "<h1>Home</h1>";
}, );

Route::get( 'about',function () {
    return "<h1>About</h1>";
} );
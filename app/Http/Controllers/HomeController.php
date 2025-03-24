<?php 

namespace App\Http\Controllers;

class HomeController {
    public function index() {
        return "<h1>Home</h1>
        <a href='/about'>About</a>";
    }

    public function about() {
        return "<h1>About</h1>
        <a href='/'>Home</a>";
    }
}
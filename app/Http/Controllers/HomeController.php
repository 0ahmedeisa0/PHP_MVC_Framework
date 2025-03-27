<?php 

namespace App\Http\Controllers;

class HomeController {
    public function index($id) {
        return "<h1>Home  </h1>. <br> <h2>id: $id</h2>";
    }

}
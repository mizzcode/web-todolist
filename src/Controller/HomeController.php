<?php

namespace Mizz\AppsTodolist\Controller;

use Mizz\AppsTodolist\App\View;

class HomeController
{
    public function index()
    {
        View::render("Home/index", [
            "title" => "App Todolist"
        ]);
    }
}

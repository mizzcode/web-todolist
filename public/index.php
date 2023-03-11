<?php

use Mizz\AppsTodolist\App\Router;
use Mizz\AppsTodolist\Controller\HomeController;

require_once __DIR__ . "/../vendor/autoload.php";

// Home Controller
Router::add("GET", "/", HomeController::class, "index");

Router::run();

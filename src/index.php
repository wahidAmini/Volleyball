<?php

use Controllers\PlayerController;
use Core\Router\Request;
use Core\Router\Router;

require 'autoload.php'; // Pas toucher svp
require 'routes.php';

$router = new Router();
$router->run();


// $controller = new AnimalController();
// $controller = new PlayerController();
// $controller->index();

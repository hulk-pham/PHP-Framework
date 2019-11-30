<?php

use App\Application\Router;
use App\Controller\Web\NotFoundController;

$router = new Router();

include_once("web.php");

include_once("api.php");

include_once("admin.php");

$router->all("*", function ($request) {
    NotFoundController::index($request);
});

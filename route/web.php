<?php


use App\Controller\Web\HomeController;
use App\Controller\Web\ProductController;
use App\Controller\Web\PostController;

$router->get("/home|/", function ($request) {
    HomeController::index($request);
});

$router->get("/post/{id}", function ($request) {
    PostController::index($request);
});


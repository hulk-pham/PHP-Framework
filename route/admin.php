<?php

use App\Controller\Admin\DashboardController;
use App\Controller\Admin\PostController;

$router->get("/dashboard", function ($request) {
    DashboardController::index($request);
});

// ========================POST==============================

$router->get("/dashboard-post", function ($request) {
    PostController::index($request);
});

$router->get("/dashboard-view-post/{id}", function ($request) {
    PostController::viewPost($request);
});

$router->get("/dashboard-new-post", function ($request) {
    PostController::formNewPost($request);
});

$router->post("/dashboard-new-post", function ($request) {
    PostController::saveNewPost($request);
});

//$router->get("/dashboard/postedit/{id}", function ($request) {
//    PostController::formEditPost($request);
//});
//
//$router->post("/dashboard/postedit/{id}", function ($request) {
//    PostController::saveEditPost($request);
//});

$router->post("/dashboard-delete-post/{id}", function ($request) {
    PostController::deletePost($request);
});

// =========================CATEGORY==================================
$router->get("/dashboard/category", function ($request) {
    DashboardController::index($request);
});


// =========================TAG==================================
$router->get("/dashboard/tag", function ($request) {
    DashboardController::index($request);
});

// =========================USER==================================
$router->get("/dashboard/user", function ($request) {
    DashboardController::index($request);
});


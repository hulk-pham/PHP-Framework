<?php

use App\Controller\Admin\DashboardController;
use App\Controller\Admin\PostController;
use App\Controller\Admin\LoginController;
use App\Controller\Web\NotFoundController;
use  App\Controller\Admin\MediaController;

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
//$router->get("/dashboard/category", function ($request) {
//    NotFoundController::index($request);
//});


// =========================MEDIA==================================
$router->get("/dashboard-media", function ($request) {
    MediaController::index($request);
});

// =========================TAG==================================
//$router->get("/dashboard/tag", function ($request) {
//    NotFoundController::index($request);
//});

// =========================USER==================================
$router->get("/dashboard-user-login", function ($request) {
    LoginController::formLogic($request);
});

$router->post("/dashboard-user-login", function ($request) {
    LoginController::doLogin($request);
});

$router->post("/dashboard-user-logout", function ($request) {
    LoginController::doLogout($request);
});

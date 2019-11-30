<?php

use App\Controller\Admin\DashboardController;

$router->get("/dashboard", function ($request) {
    DashboardController::index($request);
});


//$router->get()

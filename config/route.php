<?php

function config($route_name, $url = "/", $icon = "") {
    return [
        "name" => $route_name,
        "url" => $url,
        "icon" => $icon,
    ];
}

$navbar_config = [
    "dashboard" => config("home", "/", "nc-icon nc-chart-pie-35"),
    "post" => config("posts", "/post", "nc-icon nc-paper-2"),
    "site" => config("sites", "/site", "nc-icon nc-single-copy-04"),
    "user" => config("users", "/user", "nc-icon nc-badge"),
    "category" => config("categories", "/category", "nc-icon nc-bullet-list-67"),
    "tag" => config("tags", "/tag", "nc-icon nc-tag-content"),
    "setting" => config("setting", "/tag", "nc-icon nc-settings-gear-64"),
];

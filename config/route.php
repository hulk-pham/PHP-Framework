<?php

function config($route_name, $url = "/", $icon = "") {
    return [
        "name" => $route_name,
        "url" => $url,
        "icon" => $icon,
    ];
}

$navbar_config = [
    "dashboard" => config("dashboard", "/dashboard", "nc-icon nc-chart-pie-35"),
    "post" => config("posts", "/dashboard-post", "nc-icon nc-paper-2"),
    "meida" => config("media", "/dashboard-media", "nc-icon nc-album-2"),
    "site" => config("sites", "/dashboard/site", "nc-icon nc-single-copy-04"),
    "user" => config("users", "/dashboard/user", "nc-icon nc-badge"),
    "category" => config("categories", "/dashboard/category", "nc-icon nc-bullet-list-67"),
    "tag" => config("tags", "/dashboard/tag", "nc-icon nc-tag-content"),
    "setting" => config("setting", "/dashboard/setting", "nc-icon nc-settings-gear-64"),
];

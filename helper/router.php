<?php

if (!function_exists('asset_url')) {
    function asset_url($name) {
//        return $_SERVER['HTTP_HOST'] . '/' . $name;
        // Cheer haha
        return '/' . $name;
    }
}

if (!function_exists('url')) {
    function url($name) {
//        return $_SERVER['HTTP_HOST'] . '/' . $name;
        return '/' . $name;
    }
}

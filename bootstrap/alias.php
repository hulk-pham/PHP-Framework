<?php

/**
 * Predefine Class Alias
 */
$define = [
    'Session' => App\Application\Session::class,
    'Auth' => \App\Application\Auth::class
];


foreach ($define as $alias => $class) {
    class_alias($class, $alias);
}

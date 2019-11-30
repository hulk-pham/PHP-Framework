<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 11/25/19
 * Time: 7:48 AM
 */

namespace App\Application;


class Session {

    public static function get($name) {
        if (count($_SESSION))
            return $_SESSION[$name];
    }

    public static function set($name, $value) {
        $_SESSION[$name] = $value;
    }

    public static function all() {
        return $_SESSION;
    }
}

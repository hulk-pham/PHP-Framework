<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 11/25/19
 * Time: 8:30 AM
 */

namespace App\Application;


class Auth extends Session {
    const USER_PROPERTY_NAME = "user";

    public static function getUser() {
        return self::get(self::USER_PROPERTY_NAME);
    }

    public static function setUser($user_data) {
        self::set(self::USER_PROPERTY_NAME, $user_data);
    }

    public static function hashPassword($password) {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    public static function checkPassword($password, $hashed_pass) {
        return password_verify($password, $hashed_pass);
    }
}

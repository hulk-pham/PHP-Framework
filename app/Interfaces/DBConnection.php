<?php

namespace App\Interfaces;

interface DBConnection {
    static function connect();

    static function disconnect();

    static function getConnect();
}

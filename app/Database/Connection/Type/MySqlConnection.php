<?php

namespace App\Database\Connection\Type;

use App\Interfaces\DBConnection;


class MySqlConnection extends \PDO {
    private $config = [
        "host" => "localhost",
        "username" => "root",
        "password" => "",
        "database" => "CMS_PHP"
    ];

    public static function cacheConnect() {

    }

    public function __construct() {
//        parent::__construct("mysql:host=" . $this->config['host'] . ";dbname=" . $this->config['database'],
//            $this->config['username'],
//            $this->config['password']);
        parent::__construct("mysql:host=localhost:3306;dbname=cms_php",
            "root",
            "");
    }


}

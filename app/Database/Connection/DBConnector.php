<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 11/30/19
 * Time: 10:24 PM
 */

namespace App\Database\Connection;


class DBConnector {
    private $connect = null;

    public function __construct($connection) {
        $this->connect = $connection;
    }

    public function __destruct() {
        // TODO: Implement __destruct() method.
        if($this->connect){
            $this->connect->disconnect();
        }
    }
}

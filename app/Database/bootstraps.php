<?php

use App\Database\Connection\ConnectionFactory;

include_once(ROOT_DIR . "/config/database.php");
//try {
$DBConnection = ConnectionFactory::getConnection($database_config);
//} catch (Exception $e) {
//
//}


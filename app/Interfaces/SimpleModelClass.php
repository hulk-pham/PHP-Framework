<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 11/30/19
 * Time: 10:43 PM
 */

namespace App\Interfaces;

use App\Database\Connection\Type\MySqlConnection;


abstract class SimpleModelClass {
    protected $db = null;

    protected $hide = [];
    protected $table_name = null;

    public function __construct() {
        $this->db = new MySqlConnection();
    }

    public function __destruct() {
        unset($this->db);
    }

    public function all() {
        if (!isset($this->table_name)) throw new \Error("Expect table name");
        $stm = $this->db->query("SELECT * FROM " . $this->table_name);

        $rows = $stm->fetchAll(\PDO::FETCH_ASSOC);

        $result = [];
        foreach ($rows as $row) {
            foreach ($this->hide as $hide) {
                unset($row[$hide]);
            }
            $result[] = $row;
        }

        return $result;
    }

    public function get($id) {
        if (!isset($this->table_name)) throw new \Error("Expect table name");
        $stm = $this->db->query("SELECT * FROM " . $this->table_name . " Where id = $id");

        $rows = $stm->fetchAll(\PDO::FETCH_ASSOC);

        $result = null;
        foreach ($rows as $row) {
            foreach ($this->hide as $hide) {
                unset($row[$hide]);
            }
            $result = $row;
            break;
        }

        return $result;
    }

    public function update($id, $data) {
        throw new \Exception("Un implement");
    }

    public function insert($data) {
        throw new \Exception("Un implement");
    }

    public function delete($id) {
        throw new \Exception("Un implement");
    }
}

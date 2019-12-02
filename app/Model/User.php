<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 11/18/19
 * Time: 9:19 PM
 */

namespace App\Model;


use App\Interfaces\SimpleModelClass;

class User extends SimpleModelClass {

//    protected $hide = ['password'];
    protected $table_name = 'users';

    public function findByEmail($email){
        if (!isset($this->table_name)) throw new \Error("Expect table name");
        $stm = $this->db->query("SELECT * FROM " . $this->table_name . " Where email = '$email'");

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
}

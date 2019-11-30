<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 11/18/19
 * Time: 8:23 PM
 */

namespace App\Application;


class Model {
    use QueryBuilder;

    protected $tableName = "";

    private $db = null;


    /**
     * @return string
     */
    public function getTableName() {
        return $this->tableName;
    }

    /**
     * @param string $tableName
     */
    public function setTableName($tableName) {
        $this->tableName = $tableName;
    }


    public function execute() {
        $sqlClause = $this->createClause();

    }

    public function get() {

    }

    public function first() {

    }

    public function save() {
//        $result = $this->execute();
    }
}

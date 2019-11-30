<?php
namespace App\Application;

/**
 * Created by PhpStorm.
 * User: dell
 * Date: 11/18/19
 * Time: 8:25 PM
 */
trait QueryBuilder {

    protected $select = [];

    protected $from = [];

    protected $where = [];

    protected $groupBy = [];

    protected $having = [];

    protected $orderBy = [];

    protected $limit;

    protected $offset;

    public function addClause($type, $clause) {
        switch ($type) {
            case 'select' :
                array_push($this->select, $clause);
                break;
            case 'from' :
                array_push($this->from, $clause);
                break;
            case 'where' :
                array_push($this->where, $clause);
                break;
            case 'groupBy' :
                array_push($this->groupBy, $clause);
                break;
            case 'having' :
                array_push($this->having, $clause);
                break;
            case 'orderBy' :
                array_push($this->orderBy, $clause);
                break;
            case 'limit' :
                $this->limit = $clause;
                break;
            case 'offset' :
                $this->offset = $clause;
                break;

            default :
        }
    }

    public function select($column = ['*']) {
        $field = is_array($column) ? $column : func_get_args();
        $this->addClause('select', $field);
        return $this;
    }

    public function from($column = ['*']) {
        $field = is_array($column) ? $column : func_get_args();
        $this->addClause('from', $field);
        return $this;
    }

    public function where($column = ['*']) {
        $field = is_array($column) ? $column : func_get_args();
        $this->addClause('where', $field);
        return $this;
    }

    public function groupBy($column = ['*']) {
        $field = is_array($column) ? $column : func_get_args();
        $this->addClause('groupBy ', $field);
        return $this;
    }


    public function having($column = ['*']) {
        $field = is_array($column) ? $column : func_get_args();
        $this->addClause('having', $field);
        return $this;
    }


    public function orderBy($column = ['*']) {
        $field = is_array($column) ? $column : func_get_args();
        $this->addClause('orderBy', $field);
        return $this;
    }

    public function limit($column = ['*']) {
        $field = is_array($column) ? $column : func_get_args();
        $this->addClause('limit', $field);
        return $this;
    }

    public function offset($column = ['*']) {
        $field = is_array($column) ? $column : func_get_args();
        $this->addClause('offset', $field);
        return $this;
    }

    public function createClause() {
        return 'clause here';
    }

}

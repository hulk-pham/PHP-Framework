<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 11/30/19
 * Time: 6:16 PM
 */

namespace App\Model;


use App\Application\Auth;
use App\Interfaces\SimpleModelClass;

class Post extends SimpleModelClass {
    protected $table_name = 'post';

    public function all() {
        if (!isset($this->table_name)) throw new \Error("Expect table name");
        $stm = $this->db->query(
            "SELECT post.*, category.name as 'cate_name', category.id as 'cate_id', users.username as 'author_name', users.id as 'author_id' from post 
JOIN category ON post.category_id = category.id
LEFT JOIN users ON post.author_id = users.id
ORDER BY post.id ASC ");

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

    public function insert($data) {
        try {
            $status = $this->db->exec("
          INSERT INTO post (brief,  title, content, created_at, author_id, category_id, avatar) 
          VALUES ('{$data['brief']}','{$data['title']}' , '{$data['content']}', current_timestamp(), '{$data['author_id']}',
           '{$data['category']}', '{$data['avatar']}');");

            return $status > 0;
        } catch (\Exception $exception) {
            dd($exception);
            return 0;
        }
    }

    public function delete($id) {
        try {
            $status = $this->db->exec("DELETE from post where id = '{$id}'");
            return $status > 0;
        } catch (\Exception $exception) {
            dd($exception);
            return 0;
        }
    }
}

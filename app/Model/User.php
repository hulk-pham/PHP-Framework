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

    protected $hide = ['password'];
    protected $table_name = 'users';

}

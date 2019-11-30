<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 11/17/19
 * Time: 3:16 PM
 */

namespace App\Controller\Web;


use App\Controller\Controller;
use App\Model\User;

class ProductController extends Controller {

    public static function detail($request) {
        $user = new User();
//        var_dump($user->execute());

        self::render('page/product-detail.php');
    }
}

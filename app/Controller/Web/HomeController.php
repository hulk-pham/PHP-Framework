<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 11/16/19
 * Time: 3:16 PM
 */

namespace App\Controller\Web;


use App\Application\Request;
use App\Application\Session;
use App\Controller\Controller;
use App\Model\Post;
use App\Model\User;

class HomeController extends Controller {

    const defaultMasterFile = self::listMasterFile['frontend'];

    public static function index(Request $request) {

        $post_model = new Post();
        $posts = $post_model->all();
//        dd($posts);
        self::render("frontend/page/home.php", [
            'posts' => $posts
        ]);

    }
}

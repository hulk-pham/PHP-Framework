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

class PostController extends Controller {

    const defaultMasterFile = self::listMasterFile['frontend'];

    public static function index(Request $request) {
        self::render('frontend/page/post.php');
    }
}

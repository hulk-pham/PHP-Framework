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

class HomeController extends Controller {

    const defaultMasterFile = self::listMasterFile['frontend'];

//http://preview.themeforest.net/item/ritsu-responsive-blog-html-template/full_screen_preview/21655607?_ga=2.125113678.517307659.1575102881-802855279.1564930121
    public static function index(Request $request) {
        self::render('frontend/page/home.php');
    }
}

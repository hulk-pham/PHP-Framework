<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 11/16/19
 * Time: 3:16 PM
 */

namespace App\Controller\Admin;


use App\Application\Request;
use App\Application\Session;
use App\Controller\Controller;
use App\Middleware\RequireLogin;

class DashboardController extends Controller {

    const defaultMasterFile = self::listMasterFile['admin'];
    const middleware = [
        RequireLogin::class
    ];
    public static function index(Request $request) {
        self::checkMiddleWare($request);
        self::render('page/home.php');
    }
}

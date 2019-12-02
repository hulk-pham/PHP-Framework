<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 12/2/19
 * Time: 8:24 AM
 */

namespace App\Controller\Admin;


use App\Application\Request;
use App\Controller\Controller;
use App\Middleware\RequireLogin;

class MediaController extends Controller {
    const defaultMasterFile = self::listMasterFile['admin'];
    const middleware = [
        RequireLogin::class
    ];

    public static function index(Request $request) {
        self::render("admin/page/media.php");
    }
}

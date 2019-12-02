<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 12/2/19
 * Time: 12:28 AM
 */

namespace App\Controller\Admin;


use App\Application\Auth;
use App\Application\Request;
use App\Controller\Controller;
use App\Model\User;

class LoginController extends Controller {

    const defaultMasterFile = self::listMasterFile['login'];

    static function formLogic(Request $request, $option = null) {
        self::render('admin/page/login.php', ['error' => $option]);
    }

    static function doLogin(Request $request) {
        $user_model = new User();
        $user = $user_model->findByEmail($request->email);
        $error = null;
        if (!$user) {
            $error = "Email not found";
            self::formLogic($request, $error);
        } else {
            if (Auth::checkPassword($request->password, $user['password'])) {
                Auth::setUser($user);
                DashboardController::index($request);
            } else {
                $error = "Password is not correct";
                self::formLogic($request, $error);
            }
        }
    }

    static function doLogout(Request $request) {
        if (Auth::getUser()) {
            Auth::setUser(null);
        }

        self::formLogic($request);
    }
}

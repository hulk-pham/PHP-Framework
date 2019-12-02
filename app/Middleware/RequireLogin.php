<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 12/2/19
 * Time: 12:11 AM
 */

namespace App\Middleware;


use App\Application\Auth;
use App\Application\Request;
use App\Controller\Admin\DashboardController;
use App\Controller\Admin\LoginController;
use App\Controller\Web\HomeController;
use App\Interfaces\MiddleWare;

class RequireLogin extends MiddleWare {

    public function handle(Request $request) {
        // TODO: Implement handle() method.


        if (Auth::getUser())
            return $request;
        else {
            LoginController::formLogic($request);
        }
    }
}

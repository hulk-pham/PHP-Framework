<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 12/2/19
 * Time: 12:15 AM
 */

namespace App\Interfaces;


use App\Application\Request;

abstract class MiddleWare {
    abstract public function handle(Request $request);
}

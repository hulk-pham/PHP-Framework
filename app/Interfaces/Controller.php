<?php

namespace App\Interfaces;

use App\Application\Request;

abstract class Controller {

    const viewFileRootFolder = ROOT_DIR . '/resource/view/';
    const defaultMasterFile = 'admin/layout/master.php';
    const middleware = [];
    const listMasterFile = [];

    public static function render($filePath, $data = array(), $masterFileName = null) {
        $absoludePath = self::viewFileRootFolder . $filePath;
        if (is_file($absoludePath)) {

            self::renderRaw($filePath, $data, $masterFileName);
        } else throw new \Exception("File " . $absoludePath . " not exist");
    }

    public static function checkMiddleWare(Request $request, $list_middleware = []) {
        $listMiddleWare = count($list_middleware) ? $list_middleware : static::middleware;

        foreach ($listMiddleWare as $middleware) {
            $class_intance = new $middleware();
            $request = $class_intance->handle($request);
        }
    }

    private static function renderRaw($filePath, $data, $masterFileName = null) {
        extract($data);

        ob_start();
        require_once(ROOT_DIR . "/bootstrap/alias.php");
        require_once(self::viewFileRootFolder . $filePath);

        $_CONTENT = ob_get_clean(); // inject content to master file

        ob_clean();

        // Include master file
        if ($masterFileName) {
            if (isset(self::listMasterFile[$masterFileName]))
                require_once(self::viewFileRootFolder . static::listMasterFile[$masterFileName]);
            else throw new \Exception("Master file" . $masterFileName . " is not defined");
        }
        require_once(self::viewFileRootFolder . static::defaultMasterFile);
        die();
    }
}

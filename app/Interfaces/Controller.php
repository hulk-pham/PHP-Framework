<?php

namespace App\Interfaces;

abstract class Controller {

    public function __construct() {
    }

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


    private static function renderRaw($filePath, $data, $masterFileName = null) {
        extract($data);

        ob_start();
        require_once(ROOT_DIR . "/bootstrap/alias.php");
        require_once(self::viewFileRootFolder . $filePath);

        $_CONTENT = ob_get_clean(); // inject content to master file

        ob_clean();

        if (session_status() == PHP_SESSION_NONE) {
            ob_start();
            session_start();
        }

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

<?

namespace App\Controller;

use App\Interfaces\Controller as BaseController;

class Controller extends BaseController {

    const listMasterFile = [
        'frontend' => 'frontend/layout/master.php',
        'admin' => 'admin/layout/master.php',
        'login' => 'admin/layout/master_login.php'
    ];

    const defaultMasterFile = 'admin/layout/master.php';

}

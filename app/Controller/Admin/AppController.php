<?php
/**
 * Created by PhpStorm.
 * User: Wildy
 * Date: 01/09/2017
 * Time: 23:39
 */
namespace App\Controller\Admin;
use \App;
use Core\Auth\AuthDatabase;


class AppController extends   App\Controller\AppController {

    public function __construct()
    {
        parent::__construct();

        $app = App::getInstance();

        $auth = new AuthDatabase($app->getDb());

        if (!$auth->isConnected()) {

            $this->isForbidden();

        }

    }


}



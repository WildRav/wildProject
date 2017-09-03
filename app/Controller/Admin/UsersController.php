<?php
/**
 * Created by PhpStorm.
 * User: Wildy
 * Date: 02/09/2017
 * Time: 00:32
 */

namespace App\Controller;
use \App;
use Core\Auth\AuthDatabase;
use Core\Controller\Controller;
use Core\HTML\Form;

class UsersController extends AppController
{
    public function __construct()
    {
        parent::__construct();
        $this->loadModel('Users');
    }

    public function login(){
        $errors = false;

                    if (!empty($_POST)) {

                        /** @var TYPE_NAME $auth */
                        $auth = new AuthDatabase(App::getInstance()->getDb());


                        /** @var TYPE_NAME $auth */
                        if ($auth->login($_POST['username'], $_POST['password'])) {
                            header('Location: index.php?p=admin.users.index');
                        } else {
                            $errors = true ;
                        }

}


$form = new Form($_POST);
$this->render('users.login', compact('form','errors'));

}

}
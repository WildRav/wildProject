<?php
/**
 * Created by PhpStorm.
 * User: Wildy
 * Date: 01/09/2017
 * Time: 23:39
 */
namespace App\Controller;

use Core\Controller\Controller;
use \App;

class AppController extends  Controller
{
    protected  $template ='default';

public function __construct()
{

    $this->viewPath = ROOT .'/app/Views/';
}

protected function loadModel($model_name){

    $this->$model_name = App::getInstance()->getTable($model_name);
}



}



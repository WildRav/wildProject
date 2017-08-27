

<?php
/**
 * Created by PhpStorm.
 * User: Annise
 * Date: 05/08/2017
 * Time: 22:59
 */
session_start();
require '../app/Autoloader.php';
App\Autoloader::register();

$config =  App\Config::getInstance();

var_dump($config->get('db_user'));



<?php
/**
 * Created by PhpStorm.
 * User: Wildy
 * Date: 29/08/2017
 * Time: 21:15
 */
ini_set('display_errors', 1);
use Core\Auth\AuthDatabase;
use Core\HTML\Form;

$postTable = App::getInstance()->getTable('Post');
$categorieTable = App::getInstance()->getTable('Category');

if (!empty($_POST)) {


    $result = $postTable->delete( $_POST['id']);

    header('Location: admin.php');

}



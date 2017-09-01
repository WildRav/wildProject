<?php
/**
 * Created by PhpStorm.
 * User: Wildy
 * Date: 29/08/2017
 * Time: 21:15
 */

use Core\Auth\AuthDatabase;
use Core\HTML\Form;

$table = App::getInstance()->getTable('Category');

if (!empty($_POST)) {


    $result = $table->delete( $_POST['id']);

    header('Location: admin.php?p=categories.index');

}



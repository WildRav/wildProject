<?php
/**
 * Created by PhpStorm.
 * User: Wildy
 * Date: 28/08/2017
 * Time: 17:34
 */


use Core\Auth\AuthDatabase;

define('ROOT', dirname(__DIR__));
require ROOT . '/app/App.php';
App::load();

if (isset($_GET['p'])) {
    $page = $_GET['p'];
} else {
    $page = 'home';
}

//Auth
$app = App::getInstance();

$auth = new AuthDatabase($app->getDb());

if (!$auth->isConnected()) {

    $app->isForbidden();

}

ob_start();

if ($page === 'home') {

    require ROOT . '/pages/admin/posts/index.php';
}
else if ($page === 'posts.add') {
    require ROOT . '/pages/admin/posts/add.php';
}
else if ($page === 'posts.edit') {
    require ROOT . '/pages/admin/posts/edit.php';
}
else if ($page === 'posts.delete') {
    require ROOT . '/pages/admin/posts/delete.php';
}


else if ($page === 'categories.index') {

    require ROOT . '/pages/admin/categories/index.php';
}
else if ($page === 'categories.add') {
    require ROOT . '/pages/admin/categories/add.php';
}
else if ($page === 'categories.edit') {
    require ROOT . '/pages/admin/categories/edit.php';
}
else if ($page === 'categories.delete') {
    require ROOT . '/pages/admin/categories/delete.php';
}


$content = ob_get_clean();
require ROOT . '/pages/templates/default.php';



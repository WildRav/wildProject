<?php
/**
 * Created by PhpStorm.
 * User: Annise
 * Date: 06/08/2017
 * Time: 00:19
 */

$post = $db->prepare('SELECT * FROM articles WHERE id= ?', [$_GET['id']],'App\Table\Article',true);

?>

<h1><?= $post -> titre; ?></h1>

<p> <?= $post -> content ;?></p>

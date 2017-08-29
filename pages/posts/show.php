<?php
/**
 * Created by PhpStorm.
 * User: Annise
 * Date: 06/08/2017
 * Time: 00:19
 */

$app = App::getInstance();
$post = $app->getTable('Post')->find($_GET['id']);


if($post === false){

    $app->notFound();
}

$app->tile = $post->titre;



?>

<h1><?= $post -> titre; ?></h1>

<p><em><?= $post->categories; ?></em></p>

<p> <?= $post -> content ;?></p>

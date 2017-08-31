<?php
/**
 * Created by PhpStorm.
 * User: Annise
 * Date: 06/08/2017
 * Time: 00:19
 */

$app = App::getInstance();
$post = $app->getTable('Post')->findWithCategory($_GET['id']);



if($post === false){

    $app->notFound();
}

$app->title;
    $test= $post->titre;

?>

<h1><?= $post -> titre; ?></h1>

<p><em><?= $post->categorie; ?></em></p>

<p> <?= $post -> content ;?></p>

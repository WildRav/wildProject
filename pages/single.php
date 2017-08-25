<?php
/**
 * Created by PhpStorm.
 * User: Annise
 * Date: 06/08/2017
 * Time: 00:19
 */

use App\App;
use App\Table\Article;
use App\Table\Categorie;

$post = Article::find($_GET['id']);

if($post === false){

    App::notFound();
}

App::setTitle($post->titre);



?>

<h1><?= $post -> titre; ?></h1>

<p><em><?= $post->categories; ?></em></p>

<p> <?= $post -> content ;?></p>

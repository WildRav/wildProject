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


    $result = $postTable->update( $_GET['id'], ['titre' => $_POST['titre'],'content' => $_POST['content'], 'categorie_id'=>$_POST['categorie_id'] ]);

    if ($result) {
        ?>

        <div class="alert alert-success">L'article a bien été modifié.</div>

        <?php
    }

}

$post = $postTable->find($_GET['id']);
$categories = $categorieTable->listOfValue('id','titre') ;
$form = new Form($post);

?>

<form method="post">
    <?= $form->input('titre', 'Titre de l\'article'); ?>
    <?= $form->input('content', 'Contenu',['type'=>'textarea']); ?>
    <?= $form->select('categorie_id', 'Catégorie',$categories); ?>

    <button class="btn btn-primary">Sauvegarder</button>


</form>






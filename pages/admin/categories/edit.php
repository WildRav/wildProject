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

$table = App::getInstance()->getTable('Category');

if (!empty($_POST)) {


    $result = $table->update( $_GET['id'], ['titre' => $_POST['titre'] ]);

    if ($result) {
        ?>

        <div class="alert alert-success">La catégorie bien été modifiée.</div>

        <?php
    }

}

$categorie = $table->find($_GET['id']);

$form = new Form($categorie);

?>

<form method="post">
    <?= $form->input('titre', 'Titre de la catégorie'); ?>
    <button class="btn btn-primary">Sauvegarder</button>

</form>






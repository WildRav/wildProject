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


    $result = $table->create(['titre' => $_POST['titre'] ]);


    if ($result) {
       header('Location: admin.php?p=categories.index');
    }
}

$form = new Form($_POST);

?>

<form method="post">

    <?= $form->input('titre', 'Titre de la catégorie'); ?>

    <button class="btn btn-primary">Sauvegarder</button>


</form>






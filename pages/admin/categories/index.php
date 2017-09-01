<?php
/**
 * Created by PhpStorm.
 * User: Wildy
 * Date: 28/08/2017
 * Time: 17:40
 */

$categories = App::getInstance()->getTable('Category')->all();

?>

<h1>Tableau de Bord - Administration des Catégories</h1>


<p>
    <a href="?p=categories.add" class="btn btn-success">Ajouter une Catégorie</a>
</p>

<table class="table">
    <thead>
    <tr>
        <td>ID</td>

        <td>Titre</td>

        <td>Actions</td>
    </tr>
    </thead>

    <tbody>
    <?php foreach ($categories as $categorie): ?>

        <tr>
            <td><?= $categorie->id; ?></td>
            <td><?= $categorie->titre; ?></td>
            <td>
                <a href="?p=categories.edit&id=<?= $categorie->id; ?>" class="btn btn-primary">Editer</a>

                <form action="?p=categories.delete" method="post" style="display: inline;">
                    <input type="hidden" name="id" value="<?= $categorie->id;?>">
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>


            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<?php
/**
 * Created by PhpStorm.
 * User: Wildy
 * Date: 28/08/2017
 * Time: 17:40
 */

$posts = App::getInstance()->getTable('Post')->all();

?>

<h1>Tableau de Bord - Administration des Articles</h1>


<p>
    <a href="?p=posts.add" class="btn btn-success">Ajouter un article</a>
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
    <?php foreach ($posts as $post): ?>

        <tr>
            <td><?= $post->id; ?></td>
            <td><?= $post->titre; ?></td>
            <td>
                <a href="?p=posts.edit&id=<?= $post->id; ?>" class="btn btn-primary">Editer</a>

                <form action="?p=posts.delete" method="post" style="display: inline;">
                    <input type="hidden" name="id" value="<?= $post->id;?>">
                    <button type="submit" class="btn btn-danger"  href="?p=posts.delete&id=<?= $post->id; ?>" >Supprimer</button>
                </form>


            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

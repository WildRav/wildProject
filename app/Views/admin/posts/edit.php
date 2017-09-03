
<form method="post">
    <?= $form->input('titre', 'Titre de l\'article'); ?>
    <?= $form->input('content', 'Contenu',['type'=>'textarea']); ?>
    <?= $form->select('categorie_id', 'Catégorie',$categories); ?>

    <button class="btn btn-primary">Sauvegarder</button>


</form>






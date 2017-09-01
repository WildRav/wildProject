<?php
/**
 * Created by PhpStorm.
 * User: Wildy
 * Date: 28/08/2017
 * Time: 14:42
 */

use Core\Auth\AuthDatabase;
use Core\HTML\Form;

if (!empty($_POST)) {

    /** @var TYPE_NAME $auth */
    $auth = new AuthDatabase(App::getInstance()->getDb());


    /** @var TYPE_NAME $auth */
    if ($auth->login($_POST['username'], $_POST['password'])) {
        header('Location: admin.php');
    } else {
        ?>
        <div class="alert alert-danger">
            Identifiants incorrects

        </div>
        <?php
    }

}


$form = new Core\HTML\Form($_POST);


?>

<form method="post">
    <?= $form->input('username', 'Pseudo'); ?>
    <?= $form->input('password', 'Mot de Passe', ['type' => "password"]); ?>

    <button class="btn btn-primary">Envoyer</button>


</form>






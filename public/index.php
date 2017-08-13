

<?php
/**
 * Created by PhpStorm.
 * User: Annise
 * Date: 05/08/2017
 * Time: 22:59
 */

require '../app/Autoloader.php';
App\Autoloader::register();


if(isset($_GET['p'])){

    $p = $_GET['p'];
} else {

    $p= 'home';
}

//Initialisation des Objets

$db = new App\Database('wildprojectbdd');

ob_start();

if($p=== 'home'){

    require '../pages/home.php'  ;
   }
   elseif ($p==='article'){

        require'../pages/single.php';
   }

$content = ob_get_clean();

   require '../pages/templates/default.php';


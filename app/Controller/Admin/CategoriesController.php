<?php
/**
 * Created by PhpStorm.
 * User: Wildy
 * Date: 02/09/2017
 * Time: 01:23
 */

namespace App\Controller\Admin;

use App\Controller\Admin\AppController ;
use Core\Auth\AuthDatabase;
use Core\HTML\Form;
use \App;

class CategoriesController extends  AppController
{

    public function __construct()
    {
        parent::__construct();
        $this->loadModel('Category');

    }

    public function index()
    {
        $items = $this->Category->all();
        $this->render('admin.categories.index', compact('items'));
    }

    public function add()
    {

        if (!empty($_POST)) {
            $result = $this->Category->create([
                                                'titre' => $_POST['titre'],
                                                ]);

            return $this->index();
        }
        $form = new Form($_POST);
        $this->render('admin.categories.edit', compact('form'));
    }

    public function edit()
    {

        if (!empty($_POST)) {


            $result = $this->Category->update(
                $_GET['id'],
                ['titre' => $_POST['titre'],
                    ]);
            return $this->index();

        }

        $categorie = $this->Category->find($_GET['id']);
        $form = new Form($categorie);
        $this->render('admin.categories.edit', compact('form'));
    }

    public function delete()
    {

        if (!empty($_POST)) {


            $categorie = $this->Category->delete($_POST['id']);

            return $this->index();
        }

    }

}
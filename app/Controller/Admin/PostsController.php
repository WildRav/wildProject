<?php
/**
 * Created by PhpStorm.
 * User: Wildy
 * Date: 01/09/2017
 * Time: 23:39
 */
namespace App\Controller\Admin;

use App\Controller\Admin\AppController ;
use Core\Auth\AuthDatabase;
use Core\HTML\Form;
use \App;

class PostsController extends  AppController
{

    public function __construct()
    {
        parent::__construct();
        $this->loadModel('Post');

    }

    public function index()
    {
        $posts = $this->Post->all();
        $this->render('admin.posts.index', compact('posts'));
    }

    public function add()
    {

        if (!empty($_POST)) {


            $result = $this->Post->create(['titre' => $_POST['titre'],
                'content' => $_POST['content'],
                'categorie_id' => $_POST['categorie_id']]);


            if ($result) {
                return $this->index();

            }
        }
        $this->loadModel('Category');
        $categories = $this->Category->listOfValue('id', 'titre');
        $form = new Form($_POST);
        $this->render('admin.posts.edit', compact('categories', 'form'));
    }

    public function edit()
    {

        if (!empty($_POST)) {


            $result = $this->Post->update($_GET['id'],
                ['titre' => $_POST['titre'],
                    'content' => $_POST['content'],
                    'categorie_id' => $_POST['categorie_id']]);

            if ($result) {

                return $this->index();
            }

        }

        $post = $this->Post->find($_GET['id']);
        $this->loadModel('Category');
        $categories = $this->Category->listOfValue('id', 'titre');
        $form = new Form($post);
        $this->render('admin.posts.edit', compact('categories', 'form'));
    }

    public function delete()
    {

        if (!empty($_POST)) {


            $result = $this->Post->delete($_POST['id']);

            return $this->index();
        }
    }

}
<?php
/**
 * Created by PhpStorm.
 * User: Wildy
 * Date: 01/09/2017
 * Time: 23:38
 */

namespace Core\Controller;

class Controller{
    protected $viewPath;
    protected $template;

    protected function render($view,$variables =[]){

        ob_start();

        extract($variables);

        require ($view = $this->viewPath . str_replace('.','/', $view) . '.php');
        $content = ob_get_clean();

        require($view = $this->viewPath . '/templates/' . $this->template .'.php');
    }


    protected function isForbidden()
    {

        header('HTTP/1.0 403 Forbidden');
        die('Accès interdit');
    }

    protected function notFound()
    {
        header('HTTP/1.0 404 Not Found');
        die('Page Introuvable');
    }


}
<?php
/**
 * Created by PhpStorm.
 * User: Lukz0r
 * Date: 13/08/2017
 * Time: 16:20
 */

namespace App\Table;

    class Article{

        public function __get($key)
        {
            // TODO: Implement __get() method.
           $method = 'get' . ucfirst($key);
           $this->$key = $this->$method() ;
           return $this->$key;


        }

        public function getURL(){

            return 'index.php?p=article&id='. $this->id;

        }


        public function getExtrait(){
            $html = '<p>' .substr($this->content,0, 100). '...</p>';
            $html.= '<p><a href="'. $this->getURL(). '">Voir la Suite</a></p>';

            return $html ;
        }

    }
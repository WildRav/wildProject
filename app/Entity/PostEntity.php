<?php
/**
 * Created by PhpStorm.
 * User: Wildy
 * Date: 28/08/2017
 * Time: 14:57
 */
namespace App\Entity;

use Core\Entity\Entity;

class PostEntity extends Entity{

 public function getUrl(){
     return 'index.php?p=posts.show&id='. $this->id;

 }
    public function getExtrait(){
        $html = '<p>' .substr($this->content,0, 100). '...</p>';
        $html.= '<p><a href="'. $this->getURL(). '">Voir la Suite</a></p>';

        return $html ;
    }
}
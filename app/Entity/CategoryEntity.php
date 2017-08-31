<?php
/**
 * Created by PhpStorm.
 * User: Wildy
 * Date: 28/08/2017
 * Time: 15:17
 */

namespace App\Entity;

use Core\Entity\Entity;

class CategoryEntity extends Entity
{
    public function getURL()
    {

        return 'index.php?p=posts.categorie&id=' . $this->id;

    }


}
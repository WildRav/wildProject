<?php
/**
 * Created by PhpStorm.
 * User: Lukz0r
 * Date: 19/08/2017
 * Time: 00:07
 */

namespace App\Table;

use App\App;
use App\Table\Table;


class Categorie extends Table
{

    protected static $table = 'categories';

    public function getURL()
    {

        return 'index.php?p=categorie&id=' . $this->id;

    }


}
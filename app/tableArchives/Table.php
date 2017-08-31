<?php
/**
 * Created by PhpStorm.
 * User: Lukz0r
 * Date: 19/08/2017
 * Time: 00:21
 */

namespace App\Table;

use App\App;
use App\Table\Categorie;


class Table
{
    protected static $table;


    public static function find($id)
    {
        return static::query('
                                            SELECT  * 
                                            FROM ' . static::$table . '
                                            WHERE id = ? 
                                            ', [$id], true);
    }

    public static function query($statement, $attributes = null, $one = false)
    {


        if ($attributes) {
            return App::getDatabase()->prepare($statement, $attributes, get_called_class(), $one);
        } else {
            return App::getDatabase()->query($statement, get_called_class(), $one);
        }
    }

    public static function all()
    {

        return App::getDatabase()->query('SELECT  * 
                                            FROM ' . static::$table . ' 
                                            ', get_called_class());

    }

    public function __get($key)
    {
        // TODO: Implement __get() method.
        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
    }

}
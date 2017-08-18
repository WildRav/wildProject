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

    private static function getTable(){

        if(static::$table === null){

           $class_name = explode('\\',get_called_class());
           static::$table =strtolower(end($class_name)) . 's';

        }


        return static::$table;

    }

    public static function find($id){

        return App::getDatabase()->prepare('
                                            SELECT  * 
                                            FROM '. static::getTable(). '
                                            WHERE id = ? 
                                            ',[$id],get_called_class(),true);


    }

    public static function query($statement, $attributes ="null",$one=false ){


        if($attributes){
            return App::getDatabase()->prepare($statement, $attributes, get_called_class(),$one);

        }
        else{

            return App::getDatabase()->prepare($statement, get_called_class(),$one);
        }


    }

    public static function all(){

        return App::getDatabase()->query('SELECT  * 
                                            FROM '. static::getTable(). ' 
                                            ',get_called_class());

    }

    public function __get($key)
    {
        // TODO: Implement __get() method.
        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method() ;
        return $this->$key;


    }

}
<?php
/**
 * Created by PhpStorm.
 * User: Wildy
 * Date: 28/08/2017
 * Time: 12:09
 */

class carFactory
{

    public static function getCar($type){
        $tye= ucfirst($type);
        $class_name= "Car$type";
        return new $class_name();
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Lukz0r
 * Date: 18/08/2017
 * Time: 23:49
 */

namespace App;


class App
{
    public $title = "Wild Project";
    private static $_instance;

    public static function getInstance(){
        if (is_null(self::$_instance)) {
            self::$_instance = new App();
        }
        return self::$_instance;
    }

}
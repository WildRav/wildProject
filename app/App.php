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
    const  DB_NAME='wildprojectbdd';
    const  DB_USER='root';
    const  DB_PASS='';
    const  DB_HOST='localhost';

    private static $database;

    public static function getDatabase(){

        if(self::$database === null) {

            self::$database = new Database(self::DB_NAME,self::DB_USER,self::DB_PASS,self::DB_HOST);
        }
        return self::$database;
        }

}
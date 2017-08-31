<?php
/**
 * Created by PhpStorm.
 * User: Lukz0r
 * Date: 18/08/2017
 * Time: 23:49
 */

use Core\Config;
use Core\Database\MysqlDatabase;


class App
{

    public $title = "Wild Project";
    private $db_instance;
    private static $_instance;

    public static function getInstance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new App();
        }
        return self::$_instance;
    }

    public static function load()
    {

        session_start();

        require ROOT . '/app/Autoloader.php';
        App\Autoloader::register();

        require ROOT . '/core/Autoloader.php';
        Core\Autoloader::register();

    }

    public function getTable($name)
    {
        $class_name = '\\App\\Table\\' . ucfirst($name) . 'Table';
        return new $class_name($this->getDb());

    }

    /**
     * @return MysqlDatabase
     */
    public function getDb()
    {

        $config = Config::getInstance(ROOT . '/config/config.inc.php');

        if (is_null($this->db_instance)) {
            $this->db_instance = new MysqlDatabase($config->get('db_name'), $config->get('db_user'), $config->get('db_pass'), $config->get('db_host'));
        }

        return $this->db_instance;
    }

    public function isForbidden()
    {

        header('HTTP/1.0 403 Forbidden');
        die('Accès interdit');
    }

    public function notFound()
    {
        header('HTTP/1.0 404 Not Found');
        die('Page Introuvable');
    }


}
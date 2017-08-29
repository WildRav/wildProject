<?php
/**
 * Created by PhpStorm.
 * User: Wildy
 * Date: 28/08/2017
 * Time: 17:45
 */
namespace Core\Auth ;
use Core\Database\Database;


class AuthDatabase{

    private $db;

    public function __construct(Database $db){

        $this->db = $db;

    }


    /**
     * permet la connexion a la bdd
     * @param $username
     * @param $password
     * @return boolean
     */
    public function login($username, $password){

        $user = $this->db->prepare('SELECT * FROM users WHERE username= ? ',[$username],null, true);

        var_dump($user);
    }

    public function isConnected(){

        return isset($_SESSION['auth']);
    }



}
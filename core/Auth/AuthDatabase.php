<?php
/**
 * Created by PhpStorm.
 * User: Wildy
 * Date: 28/08/2017
 * Time: 17:45
 */

namespace Core\Auth;

use Core\Database\Database;


class AuthDatabase
{

    private $db;


    public function __construct(Database $db)
    {

        $this->db = $db;

    }

    public function getUserId()
    {
        if ($this->isConnected()) {
            return $_SESSION['auth'];
        }
        return false;
    }

    /**
     * permet la connexion a la bdd
     * @param $username
     * @param $password
     * @return boolean
     */

    public function login($username, $password)
    {

        $user = $this->db->prepare('SELECT * FROM users WHERE username= ? ', [$username], null, true);

        if ($user) {

            if ($user->password === sha1($password)) {
                $_SESSION['auth'] = $user->id;
                return true;
            }
        }
        return false;
    }

    public function isConnected()
    {

        return isset($_SESSION['auth']);
    }


}
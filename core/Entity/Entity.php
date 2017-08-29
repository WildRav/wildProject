<?php
/**
 * Created by PhpStorm.
 * User: Wildy
 * Date: 28/08/2017
 * Time: 15:13
 */
namespace  Core\Entity;

class Entity
{
    public function __get($key)
    {
        // TODO: Implement __get() method.
        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method() ;
        return $this->$key;
    }

}
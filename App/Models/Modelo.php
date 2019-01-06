<?php
namespace App\Models;

use MF\Model\Model;

class Modelo extends Model{
    protected $teste;
    public function __get($name)
    {
        return $this->$name;
    }
    public function __set($name,$value)
    {
        return $this->$name = $value;
    }
}
?>
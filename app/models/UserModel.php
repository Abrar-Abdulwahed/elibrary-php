<?php
namespace elibrary\app\models;
use elibrary\app\models\Model ;
use elibrary\app\models\Validator;

class UserModel extends Model{
    function __construct(){
        parent::$tblName="users";
        
    }
    function __set($name, $value)
    {
        $this->$name=$value;
        
    }
}
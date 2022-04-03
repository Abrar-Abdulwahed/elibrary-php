<?php
namespace elibrary\app\models;
use elibrary\app\models\Model ;

class AuthorModel extends Model{
    function __construct(){
        parent::$tblName="authors";
    }
}
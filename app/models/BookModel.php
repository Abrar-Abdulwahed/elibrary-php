<?php
namespace elibrary\app\models;
use elibrary\app\models\Model ;

class BookModel extends Model{
    function __construct(){
        parent::$tblName="books"; 
    }
}
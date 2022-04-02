<?php
namespace elibrary\app\models;
use elibrary\app\models\Model ;

class CategoryModel extends Model{
    function __construct(){
        parent::$tblName="categories";
    }
}
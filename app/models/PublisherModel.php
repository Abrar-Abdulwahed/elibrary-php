<?php
namespace elibrary\app\models;
use elibrary\app\models\Model ;

class PublisherModel extends Model{
    function __construct(){
        parent::$tblName="publishers";
    }
}
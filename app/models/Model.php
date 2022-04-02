<?php
namespace elibrary\app\models;
use elibrary\app\models\Model;
use elibrary\app\core\Application;


class Model{
    public static  $tblName;
    function save():bool{  
        $values=array();
        $columns=array();
        foreach(get_object_vars($this) as $key=> $property){
            if($property!=self::$tblName)
            {
                $values[]=is_string($property)?"'".$property."'":$property;
                $columns[]=$key;
            }
        }
        $values=implode(",",$values);
        $columns=implode(",",$columns);
        $sql_query="insert into ".self::$tblName." (".$columns." ) values (".$values.")";
   
        $stmt=Application::$app->database->pdo->prepare($sql_query);
        if($stmt->execute())
            return true;
        return false;
    }

    public function getAll(){
        $sql_query="select * from ".self::$tblName."";
        $stmt=Application::$app->database->pdo->prepare($sql_query);
        $stmt->execute();
        return $stmt->fetchAll();

    }

    public function getSingleRow($id){
        $sql_query="select * from ".self::$tblName." where id=".$id."";
         $stmt=Application::$app->database->pdo->prepare($sql_query);
        $stmt->execute();
        return $stmt->fetchObject();
    }

    public function update($id):bool{
        $set=array();
        foreach(get_object_vars($this) as $key=> $property){
            $set[] = $key.'='."'".$property."'";
        }
        $set=implode(",",$set);
        $sql_query="update ".self::$tblName." set ".$set." where ID = ".$id.";";
   
        $stmt=Application::$app->database->pdo->prepare($sql_query);
        if($stmt->execute())
            return true;
        return false;
    }
    public function remove_or_recovery($id){
        $sql_query="select is_active from ".self::$tblName." where ID = ".$id;
        $stmt=Application::$app->database->pdo->prepare($sql_query);
        if($stmt->execute()){
            $user=$stmt->fetchObject();
            if($user->is_active==1) $newValue=0;
            else $newValue=1;
        }
        $sql_query = "update ".self::$tblName." set is_active =".$newValue." where id=".$id;
        $stmt=Application::$app->database->pdo->prepare($sql_query);
        if($stmt->execute())
            return true;
        return false;
    }
}
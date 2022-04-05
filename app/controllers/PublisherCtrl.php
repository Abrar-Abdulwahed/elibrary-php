<?php
namespace elibrary\app\controllers;

use elibrary\app\core\Application;
use elibrary\app\models\PublisherModel;

class PublisherCtrl extends Controller{
    public function getBody($op){
        $publisher             = new PublisherModel();  
        $publisher->name       = $_POST['publisher_name'];
        $publisher->email      = $_POST['publisher_email'];
        $imageName             = $this->uploadFile($_FILES['image']);
        $publisher->image      = $imageName != null? $imageName:"default.png";
        $publisher->phone      = $_POST['publisher_phone'];
        $publisher->alt_phone  = $_POST['publisher_alt_phone'];
        $publisher->fax        = $_POST['publisher_fax'];
        $publisher->country    = $_POST['publisher_country'];
        $publisher->address    = $_POST['publisher_address'];
        $publisher->created_by = 1;
        $publisher->is_active  = $_POST['is_active'];
        date_default_timezone_set('Africa/Nairobi');
        if($op == 'create'){
            $publisher->created_at   = date("Y-m-d H:i:s");
            $publisher->updated_at   = date("Y-m-d H:i:s") ;
        }
        else
            $publisher->updated_at   = date("Y-m-d H:i:s") ;
        return $publisher;
    }
    function listAll($parameters=null){
        $publishers=new PublisherModel();
        $allpublishers=$publishers->getAll();
        $this->view('admin/publisher/list_publishers',$allpublishers);

    }
    function create(){
        if($_SERVER['REQUEST_METHOD'] === "GET")
            $this->view('admin/publisher/add_publisher');
        elseif($_SERVER['REQUEST_METHOD'] === "POST"){
            $publisher = $this->getBody('create');
            $publisher->save();
            $this->redirect('/publishers');
        }
    }
    function update($params=[]){
        if($_SERVER['REQUEST_METHOD'] === "GET"){
            $cat=new PublisherModel();
            $result=$cat->getSingleRow($params['id']);
            $this->view('admin/publisher/update_publisher',$result);
        }
        elseif($_SERVER['REQUEST_METHOD'] === "POST"){
            $publisher = $this->getBody('update');
            $publisher->update($_POST['id']);
            $this->redirect('/publishers');
        }
    }
    public function delete_or_recovery($params=[]){
        $publisher=new PublisherModel();
        $publisher->remove_or_recovery($params['id']);
        $this->redirect('/publishers');
    }
    public static function uploadFile(array $imageFile): string{
        // check images direction
        if (!is_dir(__DIR__ . '/../../public/images/publishers')) {
            mkdir(__DIR__ . '/../../public/images/publishers');
        }
        if ($imageFile && $imageFile['tmp_name']) {
            $image = explode('.', $imageFile['name']);
            $imageExtension = end($image);
            $imageName = uniqid(). "." . $imageExtension;
            $imagePath =  __DIR__ . '/../../public/images/publishers' . $imageName;
            move_uploaded_file($imageFile['tmp_name'], $imagePath);
            return $imageName;
        }
        return null;
    }
}
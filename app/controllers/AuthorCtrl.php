<?php
namespace elibrary\app\controllers;

use elibrary\app\core\Application;
use elibrary\app\models\AuthorModel;

class AuthorCtrl extends Controller{
    public function getBody(){
        $author = new AuthorModel();  
        $author->name=$_POST['author_name'];
        $imageName=$this->uploadFile($_FILES['image']);
        $author->image=$imageName!=null?$imageName:"default.png";
        $author->created_by=1;
        $author->is_active=$_POST['is_active'];
        return $author;
    }
    function listAll($parameters=null){
        $categories=new AuthorModel();
        $allCategories=$categories->getAll();
        $this->view('admin/author/list_categories',$allCategories);

    }
    function create(){
        if($_SERVER['REQUEST_METHOD'] === "GET")
            $this->view('admin/author/add_author');
        elseif($_SERVER['REQUEST_METHOD'] === "POST"){
            $author = $this->getBody();
            $author->save();
            $this->redirect('/categories');
        }
    }
    function update($params=[]){
        if($_SERVER['REQUEST_METHOD'] === "GET"){
            $cat=new AuthorModel();
            $result=$cat->getSingleRow($params['id']);
            $this->view('admin/author/update_author',$result);
        }
        elseif($_SERVER['REQUEST_METHOD'] === "POST"){
            $author = $this->getBody();
            $author->update($_POST['id']);
            $this->redirect('/categories');
        }
    }
    public function delete_or_recovery($params=[]){
        $author=new AuthorModel();
        $author->remove_or_recovery($params['id']);
        $this->redirect('/categories');
    }
    public static function uploadFile(array $imageFile): string
    {
        // check images direction
        if (!is_dir(__DIR__ . '/../../public/images')) {
            mkdir(__DIR__ . '/../../public/images');
        }

        if ($imageFile && $imageFile['tmp_name']) {
            $image = explode('.', $imageFile['name']);
            $imageExtension = end($image);
            $imageName = uniqid(). "." . $imageExtension;
            $imagePath =  __DIR__ . '/../../public/images/' . $imageName;
            move_uploaded_file($imageFile['tmp_name'], $imagePath);
            return $imageName;
        }
        return null;
    }
}
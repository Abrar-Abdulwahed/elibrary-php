<?php
namespace elibrary\app\controllers;

use elibrary\app\core\Application;
use elibrary\app\models\CategoryModel;

class CategoryCtrl extends Controller{
    public function getBody(){
        $category = new CategoryModel();  
        $category->name=$_POST['category_name'];
        $imageName=$this->uploadFile($_FILES['image']);
        $category->image=$imageName!=null?$imageName:"default.png";
        $category->created_by=1;
        $category->is_active=$_POST['is_active'];
        return $category;
    }
    function listAll($parameters=null){
        $categories=new CategoryModel();
        $allCategories=$categories->getAll();
        $this->view('admin/category/list_categories',$allCategories);

    }
    function create(){
        if($_SERVER['REQUEST_METHOD'] === "GET")
            $this->view('admin/category/add_category');
        elseif($_SERVER['REQUEST_METHOD'] === "POST"){
            $category = $this->getBody();
            $category->save();
            $this->redirect('/categories');
        }
    }
    function update($params=[]){
        if($_SERVER['REQUEST_METHOD'] === "GET"){
            $cat=new CategoryModel();
            $result=$cat->getSingleRow($params['id']);
            $this->view('admin/category/update_category',$result);
        }
        elseif($_SERVER['REQUEST_METHOD'] === "POST"){
            $category = $this->getBody();
            $category->update($_POST['id']);
            $this->redirect('/categories');
        }
    }
    public function delete_or_recovery($params=[]){
        $category=new CategoryModel();
        $category->remove_or_recovery($params['id']);
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
<?php
namespace elibrary\app\controllers;

use elibrary\app\core\Application;
use elibrary\app\models\BookModel;

class BookCtrl extends Controller{
    public function getBody(){
        $book = new BookModel();  
        $book->name=$_POST['book_name'];
        $imageName=$this->uploadFile($_FILES['image']);
        $book->image=$imageName!=null?$imageName:"default.png";
        $book->created_by=1;
        $book->is_active=$_POST['is_active'];
        return $book;
    }
    function listAll($parameters=null){
        $categories=new BookModel();
        $allCategories=$categories->getAll();
        $this->view('admin/book/list_categories',$allCategories);

    }
    function create(){
        if($_SERVER['REQUEST_METHOD'] === "GET")
            $this->view('admin/book/add_book');
        elseif($_SERVER['REQUEST_METHOD'] === "POST"){
            $book = $this->getBody();
            $book->save();
            $this->redirect('/categories');
        }
    }
    function update($params=[]){
        if($_SERVER['REQUEST_METHOD'] === "GET"){
            $cat=new BookModel();
            $result=$cat->getSingleRow($params['id']);
            $this->view('admin/book/update_book',$result);
        }
        elseif($_SERVER['REQUEST_METHOD'] === "POST"){
            $book = $this->getBody();
            $book->update($_POST['id']);
            $this->redirect('/categories');
        }
    }
    public function delete_or_recovery($params=[]){
        $book=new BookModel();
        print_r($book->remove_or_recovery($params['id']));
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
<?php
namespace elibrary\app\controllers;

use elibrary\app\core\Application;
use elibrary\app\models\CategoryModel;
use elibrary\app\models\BookModel;

class BookCtrl extends Controller{
    public function getBody(){
        $book               = new BookModel();  
        $book->title        = $_POST['book_title'];
        $imageName          = $this->uploadFile($_FILES['image']);
        $book->image        = $imageName!=null?$imageName:"default.png";
        $book->price        = $_POST['book_price'];
        $book->description  = $_POST['book_description'];
        $book->pages_number = $_POST['book_pages_number'];
        $book->category_id  = $_POST['book_category'];
        $book->format       = $_POST['book_format'];
        $book->quantity     = $_POST['book_quantity'];
        $book->quantity     = $_POST['book_quantity'];
        $book->is_active    = $_POST['is_active'];
        $book->created_by   = 1;
        date_default_timezone_set('Africa/Nairobi');
        $book->created_at   = date("d/m/Y H:i:s") ;
        $book->updated_at   = date("d/m/Y H:i:s") ;
        return $book;
    }
    function listAll($parameters=null){
        $categories=new BookModel();
        $allCategories=$categories->getAll();
        $this->view('admin/book/list_books',$allCategories);

    }
    function create(){
        if($_SERVER['REQUEST_METHOD'] === "GET"){
            $category      = new CategoryModel();
            $allCategoires = $categories->getAll();
            $data          = array('books'=>$allbooks,'categories'=>$allCategoires);
            $this->view('admin/book/add_book', $data);
        }
        elseif($_SERVER['REQUEST_METHOD'] === "POST"){
            $book = $this->getBody();
            $book->save();
            $this->redirect('/books');
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
            $this->redirect('/books');
        }
    }
    public function delete_or_recovery($params=[]){
        $book=new BookModel();
        print_r($book->remove_or_recovery($params['id']));
        $this->redirect('/books');
    }
    public static function uploadFile(array $imageFile): string{
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
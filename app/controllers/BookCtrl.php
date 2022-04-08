<?php
namespace elibrary\app\controllers;

use elibrary\app\core\Application;
use elibrary\app\models\CategoryModel;
use elibrary\app\models\AuthorModel;
use elibrary\app\models\PublisherModel;
use elibrary\app\models\BookModel;

class BookCtrl extends Controller{
    public function getBody($op){
        $book               = new BookModel();  
        $book->title        = $_POST['book_title'];
        $imageName          = $this->uploadFile($_FILES['image']);
        $book->image        = $imageName!=null?$imageName:"default.png";
        $book->price        = $_POST['book_price'];
        $book->description  = $_POST['book_description'];
        $book->pages_number = $_POST['book_pages_number'];
        $book->category_id  = $_POST['book_category'];
        $book->publisher_id = $_POST['book_publisher'];
        $book->author_id    = $_POST['book_author'];
        $book->format       = $_POST['book_format'];
        $book->quantity     = $_POST['book_quantity'];
        $book->is_active    = $_POST['is_active'];
        $book->created_by   = 1;
        if($op == 'create'){
            $book->created_at   = date("Y-m-d H:i:s");
            $book->updated_at   = date("Y-m-d H:i:s") ;
        }
        else
            $book->updated_at   = date("Y-m-d H:i:s") ;
        return $book;
    }
    function listAll($parameters=null){
        $book       = new BookModel();
        $allBooks   = $book->getAll();
        $this->view('admin/book/list_books',$allBooks);

    }
    function create(){
        if($_SERVER['REQUEST_METHOD'] === "GET"){
            $category      = new CategoryModel();
            $allCategoires = $category->getAll();
            $author        = new AuthorModel();
            $allAuthors    = $author->getAll();
            $publisher     = new PublisherModel();
            $allPublishers = $publisher->getAll();
            $data          = array('categories' => $allCategoires, 
                                   'publishers' => $allPublishers, 
                                   'authors'    => $allAuthors);
            $this->view('admin/book/add_book', $data);
        }
        elseif($_SERVER['REQUEST_METHOD'] === "POST"){
            $book = $this->getBody('create');
            $book->save();
            $this->redirect('/books');
        }
    }
    function update($params=[]){
        if($_SERVER['REQUEST_METHOD'] === "GET"){
            $book           = new BookModel();
            $selectedBook   = $book->getSingleRow($params['id']);
            $category       = new CategoryModel();
            $allCategoires  = $category->getAll();
            $author         = new AuthorModel();
            $allAuthors     = $author->getAll();
            $publisher      = new PublisherModel();
            $allPublishers  = $publisher->getAll();
            $data           = array(
                            'categories' => $allCategoires, 
                            'authors' => $allAuthors,
                            'publishers' => $allPublishers,
                            'book' => $selectedBook);
            $this->view('admin/book/update_book', $data);
        }
        elseif($_SERVER['REQUEST_METHOD'] === "POST"){
            $book = $this->getBody('update');
            $book->update($_POST['id']);
            $this->redirect('/books');
        }
    }
    public function delete_or_recovery($params=[]){
        $book=new BookModel();
        $book->remove_or_recovery($params['id']);
        $this->redirect('/books');
    }
    public static function uploadFile(array $imageFile): string{
        if (!is_dir(__DIR__ . '/../../public/images/books')) {
            mkdir(__DIR__ . '/../../public/images/books');
        }
        if ($imageFile && $imageFile['tmp_name']) {
            $image = explode('.', $imageFile['name']);
            $imageExtension = end($image);

            $imageName = uniqid(). "." . $imageExtension;
            $imagePath =  __DIR__ . '/../../public/images/books/' . $imageName;

            move_uploaded_file($imageFile['tmp_name'], $imagePath);
            return $imageName;
        }
        return null;
    }
}
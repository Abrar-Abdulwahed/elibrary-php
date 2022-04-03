<?php
namespace elibrary\app\controllers;

use elibrary\app\core\Application;
use elibrary\app\models\AuthorModel;

class AuthorCtrl extends Controller{
    public function getBody(){
        $author             = new AuthorModel();  
        $author->name       = $_POST['author_name'];
        $author->bio        = $_POST['author_bio'];
        $author->email      = $_POST['author_email'];
        $author->phone      = $_POST['author_phone'];
        $author->created_by = 1;
        $author->is_active  = $_POST['is_active'];
        $author->created_at = $_POST['is_active'];
        $author->updated_at = $_POST['is_active'];
        return $author;
    }
    function listAll($parameters=null){
        $authors=new AuthorModel();
        $allauthors=$authors->getAll();
        $this->view('admin/author/list_authors',$allauthors);

    }
    function create(){
        if($_SERVER['REQUEST_METHOD'] === "GET")
            $this->view('admin/author/add_author');
        elseif($_SERVER['REQUEST_METHOD'] === "POST"){
            $author = $this->getBody();
            $author->save();
            $this->redirect('/authors');
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
            $this->redirect('/authors');
        }
    }
    public function delete_or_recovery($params=[]){
        $author=new AuthorModel();
        $author->remove_or_recovery($params['id']);
        $this->redirect('/authors');
    }
}
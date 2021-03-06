<?php
namespace elibrary\app\controllers;

use elibrary\app\core\Request;
use elibrary\app\models\UserModel;

class UserCtrl extends Controller{
    function newUser(){
        $this->view('new_user');
    }

    public function show(){
        $this->view('list_categories');
    }

    public function saveUser(){

        //print_r($_POST);
        $user=new User();
        $user->name=$_POST['name'];
        $user->email=$_POST['email'];
        $user->password=md5($_POST['password']);
        $user->is_active=isset($_POST['is_active'])?1:0;
        $user->role_id=1;
        $user->save();
        if($user->save())
        
        $this->view('feedback',['success'=>'data inserted successful']);
        else 
        $this->view('feedback',['danger'=>'can not add data']);

    }

    public function register(){
        $this->view("admin/new_user");
    }

    public function delete(){
        
    }
}
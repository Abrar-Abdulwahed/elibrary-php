<?php
namespace elibrary\app\controllers;

use elibrary\app\core\Application;

class SiteCtrl extends Controller{
    public function home(){
        $params = [
            'title'=>'Jarir Home',
        ];
        $this->view('home');
    }
    public function category(){
        $params = [
            'title'=>'Category',
        ];
        $this->view('pages/category');
    }
    public function details(){
        $params = [
            'title'=>'Details',
        ];
        $this->view('pages/details');
    }
    public function cart(){
        $params = [
            'title'=>'Cart',
        ];
        $this->view('pages/cart');
    }
}
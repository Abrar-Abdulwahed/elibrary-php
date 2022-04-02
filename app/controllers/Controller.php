<?php

namespace elibrary\app\controllers;
use elibrary\app\core\Application;

class Controller{
    public function view($viewName,$params=[]){
        Application::$app->router->view($viewName,$params);
    }
    public function redirect($url){
        Application::$app->router->redirect($url);
    }
}
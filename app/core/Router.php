<?php

namespace elibrary\app\core;

class Router{
    protected array $routes = [];
    public Request $request;
    public Response $response;

    public function __construct(Request $request, Response $response){
        $this->request = $request;
        $this->response = $response;
    }
    public function get($path, $callback){
        $this->routes['get'][$path] = $callback;
    }
    public function post($path, $callback){
        $this->routes['post'][$path] = $callback;
    }

    public function resolve(){
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;
        if($callback === false){
            $this->response->setStatusCode(404);
            return $this->view("_404");
        }
        if(is_string($callback)){
            return $this->view($callback);
        }
        return call_user_func($callback);
    }
    public function view($view){
        $layoutContent = $this->layoutContent();
        $viewContent = $this->onlyView($view);
        return str_replace('{{content}}', $viewContent, $layoutContent);
        include_once Application::$ROOT_DIR."/views/$view.php";
    }
    protected function layoutContent(){
        ob_start();
        include_once Application::$ROOT_DIR."/app/views/layouts/main.php";
        return ob_get_clean();
    }
    protected function onlyView($view){
        ob_start();
        include_once Application::$ROOT_DIR."/app/views/$view.php";
        return ob_get_clean();
    }
}
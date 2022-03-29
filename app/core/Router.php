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
    public function get($uri, $callback){
        $this->routes['get'][$uri] = $callback;
    }
    public function post($uri, $callback){
        $this->routes['post'][$uri] = $callback;
    }

    public function resolve(){
        $uri = $this->request->getURI();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$uri] ?? false;
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
        // ob_start();
        include_once Application::$ROOT_DIR."/app/views/$view.php";
        // return ob_get_clean();
    }
}
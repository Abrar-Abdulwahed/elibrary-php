<?php
namespace elibrary\app\core;

class Application{
    public Request $request;
    public Response $response;
    public Router $router;
    public static Application $app;
    public Database $database;
    
    function __construct(array $dbConfig)
    {    
    	$this->database=new Database($dbConfig);
        self::$app=$this;
        $this->request=new Request();
        $this->response=new Response();
        $this->router=new Router($this->request);

    } 
    public function start(){
        $this->router->executeRoute();
    }
}

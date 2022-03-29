<?php
namespace elibrary\app\core;

class Request{
    public function getURI(){
        $uri = $_SERVER['REQUEST_URI'] ?? false;
        $position = strpos($uri, '?');
        if($position === false)
            return $uri;
        return substr($uri, 0, $position);
    }
    public function getMethod(){
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
}
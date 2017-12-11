<?php

namespace App\Core;

class Router
{
    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file)
    {
        $router = new static;

        require $file;

        return $router;
    }   

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;    
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;    
    }

    public function direct($uri, $requestType)
    {
        // if the $uri exists inside $routes[$requestType]
        // return PagesController@home/about/contact/etc
        if (array_key_exists($uri, $this->routes[$requestType])) {
            // pass the controller and method name as args to methodAction
            return $this->methodAction(
                ...explode('@', $this->routes[$requestType][$uri])
            );
        }
        throw new Exception("404 Page");   
    }

    protected function methodAction($controller, $method)
    {
        // hard code namespace
        $controller = "App\\Controller\\{$controller}";
        $controller = new $controller;

        // if $method deos not exist inside the controller class
        // throw exception
        if (! method_exists($controller, $method)) {
            throw new Exception(
                "{$method} is defined within the {$controller}"    
            );
        }
        // return controller with a call to the $method
        // eg. controller->method
        return $controller->$method();
    }
}

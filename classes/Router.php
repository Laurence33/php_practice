<?php

class Router
{
    protected $routes = [];

    public static function load($routes)
    {
        $router = new static;
        require $routes;
        $router->define($routes);

        return $router;
    }

    public function define($routes)
    {
        $this->routes = $routes;
    }

    public function direct($uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }

        throw new Exception('No route defined');
    }
}

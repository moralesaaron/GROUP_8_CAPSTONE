<?php

class Router
{
    private $routes = [];
    private $params = [];

    // Define a GET route
    public function get($route, $controller)
    {
        $this->routes['GET'][$route] = $controller;
    }

    // Define a POST route
    public function post($route, $controller)
    {
        $this->routes['POST'][$route] = $controller;
    }

    // Match the URI with the routes
    public function direct($uri, $requestType)
    {
        foreach ($this->routes[$requestType] as $route => $controller) {
            // Match static routes
            if ($uri == $route) {
                return $controller;
            }

            // Match dynamic routes (like sendinvoice/{id})
            $routeParts = explode('/', trim($route, '/'));
            $uriParts = explode('/', trim($uri, '/'));

            if (count($routeParts) == count($uriParts)) {
                $parameters = [];
                for ($i = 0; $i < count($routeParts); $i++) {
                    if (strpos($routeParts[$i], '{') === false) {
                        if ($routeParts[$i] !== $uriParts[$i]) {
                            break;
                        }
                    } else {
                        $parameters[] = $uriParts[$i];
                    }
                }

                if ($i === count($routeParts)) {
                    $this->params = $parameters;
                    return $controller;
                }
            }
        }

        throw new Exception('No route defined for this URI.');
    }

    // Get route parameters (like {id})
    public function getParams()
    {
        return $this->params;
    }
}

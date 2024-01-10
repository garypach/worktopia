<?php

class Router
{
    protected $routes = [];
    /**
     * 
     * add new route
     * 
     * @param string $method
     * @param string $uri
     * @param string $controller
     * @return void
     * 
     */
    public function registerRoute($method, $uri, $controller)
    {
        $this->routes[] = [
            'method' => $method,
            'uri' => $uri,
            'controller' => $controller,
        ];
    }
    /**
     * 
     * add a GET route
     * 
     * @param string $uri
     * @param string $controller
     * @return void
     * 
     */
    public function get($uri, $controller)
    {
        $this->registerRoute('GET', $uri, $controller);
    }

    /**
     * 
     * add a POST route
     * 
     * @param string $uri
     * @param string $controller
     * @return void
     * 
     */
    public function post($uri, $controller)
    {
        $this->registerRoute('POST', $uri, $controller);
    }


    /**
     * 
     * add a PUT route
     * 
     * @param string $uri
     * @param string $controller
     * @return void
     * 
     */
    public function put($uri, $controller)
    {
        $this->registerRoute('PUT', $uri, $controller);
    }


    /**
     * 
     * add a DELETE route
     * 
     * @param string $uri
     * @param string $controller
     * @return void
     * 
     */
    public function delete($uri, $controller)
    {
        $this->registerRoute('PUT', $uri, $controller);
    }

    /**
     * 
     * Load error page
     * @param int $httpCode
     * @return void
     * 
     */

    public function error($httpCode = 404)
    {
        http_response_code(404);
        loadView("error/{$httpCode}");
        exit;
    }
    /**
     * 
     * route the request
     * 
     * @param string $uri
     * @param string $method
     * @return void
     * 
     */

    public function route($uri, $method)
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === $method) {
                require basePath('App/' . $route['controller']);
                return;
            }
        }

        $this->error();
    }
}

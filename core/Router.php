<?php

namespace App\Core;

class Router {

    public static $routes = [

        'GET' => [],
        'POST' => []
    ];

    public static function load($file) {

        $router = new static;
        require $file;
        return $router;
    }
    // public static function middleware(String $middleware, $callback) {

    //     if ($middleware == 'auth') {
    //         if (!AuthCheck()) {
    //             return viewAuth('login');
    //         }

           
    //     }
    //     if ($middleware == 'admin') {
            
    //             if (!AuthAdminCheck()) {
    //                 return viewErrors('AuthError', ['code' => 403]);
    //             }
        

    //         exit(403);
    //     }

    //     call_user_func($callback);
    // }

    public static function get($uri, $controller) {

        self::$routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller) {

        self::$routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $requestType) {

        if (array_key_exists($uri, self::$routes[$requestType])) {

            return $this->callAction(
                ...explode('@', self::$routes[$requestType][$uri])
            );
        }

        throw new \Exception("There is no routes for this URI {$uri}");
    }
    protected function callAction($controller, $action) {

        $controller = "App\\Controllers\\{$controller}";

        $controller = new $controller;

        $name = get_class($controller);

        if (!method_exists($controller, $action)) {

            throw new \Exception("{$name} doesn't not respond to {$action} Method!");
        }

        return $controller->$action();
    }
}

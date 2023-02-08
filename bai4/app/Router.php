<?php

namespace App;

class Router
{
    public static $routes = [];

    public static function get($path, $callback)
    {
        static::$routes['get'][$path] = $callback;
    }
    public static function post($path, $callback)
    {
        static::$routes['post'][$path] = $callback;
    }

    public function getPath()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $path = str_replace("/we17310_php2/bai4/public/", '/', $path);
        $position = strpos($path, '?');
        if ($position) {
            $path = substr($path, 0, $position);
        }
        return $path;
    }

    public function getMethod()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
    public function resolve()
    {
        $path = $this->getPath();
        $method = $this->getMethod();

        $callback = static::$routes[$method][$path] ?? false;

        $callback();
    }
}

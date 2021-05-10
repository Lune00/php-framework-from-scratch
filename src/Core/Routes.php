<?php


namespace Mini\Core;

use Closure;

class Routes
{

  public static function find_callback(string $path, string $method): callable|string
  {

    $routes = self::all();

    if (!array_key_exists($method,  $routes))
      return '500';

    if (!array_key_exists($path,  $routes[$method]))
      return '404';

    return  $routes[$method][$path];
  }

  private static function all()
  {
    return  array(
      'get' => array(
        '/' => function () {
          echo 'Welcome home : )';
        },
        '/contact' => function () {
          echo "Let's keep in touch :)";
        }
      )
    );
  }
}

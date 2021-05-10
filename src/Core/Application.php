<?php

namespace Mini\Core;

class Application
{
    public static function run(){

        //Setup whoops handler
        $whoops = new \Whoops\Run();
        $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
        $whoops->register();
        
        $router = new Router();
        $router->resolve();
    }
}

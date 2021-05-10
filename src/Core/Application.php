<?php

namespace Mini\Core;


class Application
{
    public static function run()
    {
        //Whoops
        $whoops = new \Whoops\Run();
        $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
        $whoops->register();

        $router = new Router();
        $router->resolve();
    }
}

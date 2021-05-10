<?php

namespace Mini\Core;



class Router
{

    public function resolve()
    {
        $path = get_path();
        $method = get_method();
        $callback = Routes::find_callback($path, $method);

        if (!is_callable($callback)) {
            echo $callback;
            return;
        }

        $callback();
    }
}

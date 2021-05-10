<?php


function get_path()
{
    //On veut récupérer l'URI demandée par le client. 2 infos dans
    //$_SERVER dessus : 'PATH_INFO' et 'REQUEST_URI'
    //dump($_SERVER);
    $path = $_SERVER['REQUEST_URI'] ?? '/';
    $position = strpos($path, '?');

    if (false === $position)
        return $path;

    //$query_parameters = substr($path, $position + 1);
    return substr($path, 0, $position);
}

function get_method()
{
    return strtolower($_SERVER['REQUEST_METHOD']);
}

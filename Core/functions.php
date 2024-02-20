<?php

use Core\Response;


/**
 * Dump and  Die  Function
 */


function dd($value)
{
    ob_start();
    require base_path("dd.php");
    $output = ob_get_clean();
    echo $output;
    die();
}

/**
 *  Check URI
 */

function urlIs($URI)
{
    return $_SERVER["REQUEST_URI"] === $URI ? "bg-blue-600 text-white" : "hover:bg-gray-100 ";
}

function authorize($condition, $status = Response::FORBIDDEN)
{
    if (!$condition) {
        abort($status);
    }
}

function abort($code = 404)
{
    http_response_code($code);

    require base_path("views/{$code}.php");

    die();
}

function base_path($path): string
{
    return BASE_PATH . $path;
}


function view($path, $attributes = [])
{
    extract($attributes);
    require base_path("views/" . $path);
}

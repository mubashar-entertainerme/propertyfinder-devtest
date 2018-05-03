<?php

require __DIR__.'/vendor/autoload.php';

$cards = file_get_contents(__DIR__.'/static/cards.json');

$request_uri = explode('/', $_SERVER['REQUEST_URI']);

array_shift($request_uri);


list($class_name, $method, $params) = $request_uri;

$class = 'App\\Controllers\\' .ucfirst($class_name) . 'Controller';

try {
    switch ($request_uri[0]) {
        case '':
        case 'home':
            $object = new $class;

            return $object->$method($params);
            break;

        default:
            echo "Route doesn't exists";
            break;
    }
} catch (\Exception $e) {
    print_r($e);
    exit;
}

/**
 * TODO
 * make proper methods names
 * send cards data a param to methods
 * parse cards and return data as json
 *
 *
 * implement response class
 *
 * create test cases and try to cover atleast 90%
 */

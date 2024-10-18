<?php

require_once "../vendor/autoload.php";

$request = $_SERVER['REQUEST_URI'];
$viewDir = '/views/';

$chunks = explode("/", $request);

switch ($chunks[1]) {
    case '':
    case '/':
        require __DIR__ . $viewDir . 'links.php';
        break;

    case 'token':
        $token = $chunks[2];
        require __DIR__ . $viewDir . 'tokens.php';
        break;

    case 'not-found':
    default:
        http_response_code(404);
        require __DIR__ . $viewDir . '404.php';
}

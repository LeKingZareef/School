<?php
require '../app/db.php'; 
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;

//Get page name 

$_SERVER['REQUEST_URI_PATH'] = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); 
$segment = explode('/', $_SERVER['REQUEST_URI_PATH']);

if (isset($segment[2])) {
    $page_name = $segment[2]; 

    if ($page_name == 'category' || $page_name == 'categories') {
        require_once ('../app/api/category.php'); 
    } elseif ($page_name == 'post' || $page_name == 'posts'){
        require_once ('../app/api/post.php'); 
    } else {
        die('error on API');
    }
}


$app->run();
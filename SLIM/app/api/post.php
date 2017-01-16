<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App;

$app->get('/api/posts', function(Request $request, Response $response ) {

    $sql_post_select = "SELECT * FROM post"; 

    try {
        //database object
        $db = new db() ; 
        //connect
        $db = $db->connect();

        $stmt = $db->query($sql_post_select); 
        $posts = $stmt->fetchAll(PDO::FETCH_OBJ); 
        $db = null ;
        echo json_encode($posts); 

    }catch (PDOEception $e){
        echo '{"error": {"text":'.$e->getMessage().'}}'; 
    }
} ); 

//Get singel post 

$app->get('/api/post/{id}', function(Request $request, Response $response) {
    $id = $request->getAttribute('id');

    $sql_post_select = "SELECT * FROM post WHERE id = $id";
    
    try {
        //database object
        $db = new db() ; 
        //connect
        $db = $db->connect();

        $stmt = $db->query($sql_post_select); 
        $post = $stmt->fetchAll(PDO::FETCH_OBJ); 
        $db = null ;
        echo json_encode($post); 

    }catch (PDOEception $e){
        echo '{"error": {"text":'.$e->getMessage().'}}'; 
    }
}); 

//Add post
$app->post('/api/post/add', function(Request $request, Response $response) {
    $title = $request->getParam('title'); 
    $categorie_id = $request->getParam('categorie_id'); 
    $body = $request->getParam('body'); 

    $sql_insert = "INSERT INTO post (title, categorie_id, body) VALUES (:title, :categorie_id, :body)"; 

    try {
        //database object
        $db = new db() ; 
        //connect
        $db = $db->connect();

        $stmt = $db->prepare($sql_insert); 

        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':categorie_id', $categorie_id);
        $stmt->bindParam(':body', $body);

        $stmt->execute(); 
        
        echo '{"notice": {"text":"Post added"}}'; 
        
    }catch (PDOEception $e){
        echo '{"error": {"text":'.$e->getMessage().'}}'; 
    }
}); 

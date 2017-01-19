<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App;

$app->get('/api/categories', function(Request $request, Response $response ) {

    $sql_post_select = "SELECT * FROM categorie"; 

    try {
        //database object
        $db = new db() ; 
        //connect
        $db = $db->connect();

        $stmt = $db->query($sql_post_select); 
        $categorie = $stmt->fetchAll(PDO::FETCH_OBJ); 
        $db = null ;
        echo json_encode($categorie); 

    }catch (PDOEception $e){
        echo '{"error": {"text":'.$e->getMessage().'}}'; 
    }
} ); 

//Get singel categorie 

$app->get('/api/category/{id}', function(Request $request, Response $response) {
    $id = $request->getAttribute('id');

    $sql_post_select = "SELECT * FROM categorie WHERE id = $id";
    
    try {
        //database object
        $db = new db() ; 
        //connect
        $db = $db->connect();

        $stmt = $db->query($sql_post_select); 
        $categorie_id = $stmt->fetchAll(PDO::FETCH_OBJ); 
        $db = null ;
        echo json_encode($categorie_id); 

    }catch (PDOEception $e){
        echo '{"error": {"text":'.$e->getMessage().'}}'; 
    }
}); 

//Add categorie
$app->post('/api/category/add', function(Request $request, Response $response) {
    $name = $request->getParam('name'); 
   

    $sql_insert = "INSERT INTO categorie (name) VALUES (:name)"; 

    try {
        //database object
        $db = new db() ; 
        //connect
        $db = $db->connect();

        $stmt = $db->prepare($sql_insert); 

        $stmt->bindParam(':name', $name);

        $stmt->execute(); 
        
        echo '{"notice": {"text":"Categorie added"}}'; 
        
    }catch (PDOEception $e){
        echo '{"error": {"text":'.$e->getMessage().'}}'; 
    }
}); 

//Update categorie 

$app->put('/api/category/update/{id}', function(Request $request, Response $response) {
    $id = $request->getAttribute('id');

    $name = $request->getParam('name'); 

    $sql = "UPDATE categorie SET name  = :name WHERE id = $id"; 

    try {
        //database object
        $db = new db() ; 
        //connect
        $db = $db->connect();

        $stmt = $db->prepare($sql); 

        $stmt->bindParam(':name', $name);

        $stmt->execute(); 
        
        echo '{"notice": {"text":"Post '.$id.' Updated"}}'; 
        
    }catch (PDOEception $e){
        echo '{"error": {"text":'.$e->getMessage().'}}'; 
    }
}); 

//Delete post 

$app->delete('/api/category/delete/{id}', function(Request $request, Response $response) {
    $id = $request->getAttribute('id');

    $sql = "DELETE FROM categorie WHERE id = $id"; 

    try {
        //database object
        $db = new db() ; 
        //connect
        $db = $db->connect();

        $stmt = $db->prepare($sql); 

        $stmt->execute(); 
        $db = null; 
        
        echo '{"notice": {"text":"Categorie '.$id.' Deleted"}}'; 
        
    }catch (PDOEception $e){
        echo '{"error": {"text":'.$e->getMessage().'}}'; 
    }
}); 
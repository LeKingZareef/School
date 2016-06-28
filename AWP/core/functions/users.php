<?php
include_once '../database/connection.php';
 foreach($conn->query("select * from login" ) as $row){
            $login_username = $row ['login_username'];
            echo '<br/>' . $login_username;
        }
?>
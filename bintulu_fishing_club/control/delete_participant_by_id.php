<?php

    include "../db_connect.php";
    
    $id = $_REQUEST['id'];
    
    $query = "delete from catch where id = ".$id;
    $statement = $db->prepare($query);
    $statement->execute();
    $statement->closeCursor();

    $query1 = "delete from participants where id = ".$id;
    $statement1 = $db->prepare($query1);
    $statement1->execute();
    $statement1->closeCursor();
    
    $response = "Request completed.";
    
    echo $response;

    ?>

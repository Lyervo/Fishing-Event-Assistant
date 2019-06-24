<?php

    include "../db_connect.php";
    
    $query = "delete from participants where 1";
    $statement = $db->prepare($query);
    $statement->execute();
    $statement->closeCursor();
    
    $query = "delete from catch where 1";
    $statement = $db->prepare($query);
    $statement->execute();
    $statement->closeCursor();
    
    $response = "Request completed, the database has been cleared.";
    
    echo $response;

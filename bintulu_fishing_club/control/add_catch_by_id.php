<?php

    include "../db_connect.php";
    
    $id = $_REQUEST['id'];
    $weight = $_REQUEST['weight'];
    $type = $_REQUEST['type'];

    $query = "insert into catch values('".$id."','".$weight."','".$type."')";
    $statement = $db->prepare($query);
    $statement->execute();
    $statement->closeCursor();
    
    $response = "Request completed.";
    
    echo $response;


?>
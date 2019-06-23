<?php

    include "../db_connect.php";
    
    $name = $_REQUEST['name'];
    $gender = $_REQUEST['gender'];
    $fee = $_REQUEST['fee'];

    $query = "insert into participants values(null,'".$name."','".$gender."','".$fee."')";
    $statement = $db->prepare($query);
    $statement->execute();
    $statement->closeCursor();
    
    $response = "Request completed.";
    
    echo $response;


?>
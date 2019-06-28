<?php

    include "../db_connect.php";
    
    $id = $_REQUEST['id'];

    $query = "select fee from participants where id = ".$id;
    $statement = $db->prepare($query);
    $statement->execute();
    $result = $statement->fetch();
    $statement->closeCursor();
    
    
    
    if($result['fee'] === "paid")
    {
        $fee = "not paid";
    }else
    {
        $fee = "paid";
    }
    
    $query1 = "update participants set fee = '".$fee."' where id = ".$id;
    $statement1 = $db->prepare($query1);
    $statement1->execute();
    $statement1->closeCursor();
    
    $response = "Request completed.";
    
    echo $response;
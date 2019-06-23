<?php
        include "../db_connect.php";
        
        require "../model/participant_db.php";
        
        $query1 = "select * from catch order by weight desc";
        $statement1 = $db->prepare($query1);
        $statement1->execute();
        $results1 = $statement1->fetchAll();
        $statement1->closeCursor();
        $response = "Catch sort by weight in descending order.";
        
        $blue = true;
        
        if(empty($results1))
        {
            $response = "No one have a catch yet.";
        }else
        {
            $response = $response."<table><tr><td>ID</td><td>Name</td><td>Weight</td><td>Type</td></tr>";
            foreach($results1 as $result)
            {   
                $name = get_participant_name_by_id($result['id']);
                if($blue)
                {
                    $response = $response."<tr class='color_blue'><td>".$result['id']."</td><td>".$name."</td><td>".$result['weight']."</td><td>".$result['type']."</td><tr>";
                    $blue = false;

                }else
                {
                    $response = $response."<tr class='color_red'><td>".$result['id']."</td><td>".$name."</td><td>".$result['weight']."</td><td>".$result['type']."</td><tr>";
                    $blue = true;
                }

            }
        }
        
        echo $response;  
?>
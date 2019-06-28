<?php
        include "../db_connect.php";
        require "show_participant.php";
        $query1 = "select * from participants";
        $statement1 = $db->prepare($query1);
        $statement1->execute();
        $results1 = $statement1->fetchAll();
        $statement1->closeCursor();
        $response = get_table_header();
        
        $blue = true;
        
        if(empty($results1))
        {
            $response = "The database is empty.";
        }
        
        foreach($results1 as $result)
        {   
            if($blue)
            {
                $response = $response.get_participant_text($result,$blue);
                $blue = false;
                
            }else
            {
                $response = $response.get_participant_text($result,$blue);
                $blue = true;
            }
            
        }
        
        echo $response;   
        
    



?>

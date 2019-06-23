<?php
        include "../db_connect.php";
        
        $id = $_REQUEST['id'];
        $query1 = "select * from catch where id=".$id;
        $statement1 = $db->prepare($query1);
        $statement1->execute();
        $results1 = $statement1->fetchAll();
        $statement1->closeCursor();
        $response = "Participant No. ".$id."'s catch <br><table><tr id='head_color'><th>Weight</th><th>Type</th></tr>";
        
        $blue = true;
        
        if(empty($results1))
        {
            $response = "This participant does not have a catch yet.";
        }else
        {
            foreach($results1 as $result)
            {   
                if($blue)
                {
                    $response = $response."<tr class='color_blue'><td>".$result['weight']."</td><td>".$result['type']."</td><tr>";
                    $blue = false;

                }else
                {
                    $response = $response."<tr class='color_red'><td>".$result['weight']."</td><td>".$result['type']."</td><tr>";
                    $blue = true;
                }

            }
        }
        
        echo $response;  
?>
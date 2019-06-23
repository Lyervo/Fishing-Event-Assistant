<?php
        include "../db_connect.php";
        $query1 = "select * from participants";
        $statement1 = $db->prepare($query1);
        $statement1->execute();
        $results1 = $statement1->fetchAll();
        $statement1->closeCursor();
        $response = "<table><tr id='head_color'><th>ID</th><th>Name</th><th>Gender</th><th>Fees</th><th></th><th></th></tr>";
        
        $blue = true;
        
        foreach($results1 as $result)
        {   
            if($blue)
            {
                $response = $response."<tr class='color_blue'><td>".$result['id']."</td><td>".$result['name']."</td><td>".$result['gender']."</td><td>".$result['fee']."</td>"
                        . "<td><button onclick='remove_participant(".$result['id'].")'>Remove</button></td>"
                        . "<td><button onclick='show_catch(".$result['id'].")'>See Catch</button></td>"
                        . "<td><button onclick='catch_form(".$result['id'].")'>Add Catch</button></td></tr>";
                $blue = false;
                
            }else
            {
                $response = $response."<tr class='color_red'><td>".$result['id']."</td><td>".$result['name']."</td><td>".$result['gender']."</td><td>".$result['fee']."</td>"
                        . "<td><button onclick='remove_participant(".$result['id'].")'>Remove</button></td>"
                        . "<td><button onclick='show_catch(".$result['id'].")'>See Catch</button></td>"
                        . "<td><button onclick='catch_form(".$result['id'].")'>Add Catch</button></td></tr>";
                $blue = true;
            }
            
        }
        
        echo $response;   
        
    



?>

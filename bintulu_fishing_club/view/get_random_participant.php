<?php

    include '../db_connect.php';
    require '../model/participant_db.php';
    
    $result = random_pick();
    
    $response = "<table><tr id='head_color'><th>ID</th><th>Name</th><th>Gender</th><th>Fees</th><th></th><th></th></tr>";
        
    if(empty($result))
    {
        $response = "Theres no participant with this ID.";
    }else
    {
        $response = $response."<tr class='color_blue'><td>".$result['id']."</td><td>".$result['name']."</td><td>".$result['gender']."</td><td>".$result['fee']."</td>"
                        . "<td><button onclick='show_catch(".$result['id'].")'>See Catch</button></td>"
                        . "<td><button onclick='catch_form(".$result['id'].")'>Add Catch</button></td>"
                        . "<td class='remove_button' style=' display : none'><button onclick='remove_participant(".$result['id'].")'>Remove</button></td></tr>";
    }
        
    echo $response; 
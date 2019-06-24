<?php


    include "../db_connect.php";
    require "../model/participant_db.php";
    
    $term = $_REQUEST['search_term'];
    
    $result = get_participant_by_id($term);
    
    $response = "<table><tr id='head_color'><th>ID</th><th>Name</th><th>Gender</th><th>Fees</th><th></th><th></th></tr>";
        
    if(empty($result))
    {
        $response = "Theres no participant with this ID.";
    }else
    {
        $response = $response."<tr class='color_blue'><td>".$result['id']."</td><td>".$result['name']."</td><td>".$result['gender']."</td><td>".$result['fee']."</td>"
                        . "<td><button onclick='show_catch(".$result['id'].")'>See Catch</button></td>"
                        . "<td><button onclick='catch_form(".$result['id'].")'>Add Catch</button></td>"
                        . "<td><button onclick='remove_participant(".$result['id'].")' class='remove_button' style=' display : none'>Remove</button></td></tr>";
    }
        
    echo $response;  
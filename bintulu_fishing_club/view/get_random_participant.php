<?php

    include '../db_connect.php';
    require '../model/participant_db.php';
    require 'show_participant.php';
    $result = random_pick();
    
    $response = get_table_header();
        
    if(empty($result))
    {
        $response = "Theres no participant with this ID.";
    }else
    {
        $response = $response.get_participant_text($result,true);
    }
        
    echo $response; 
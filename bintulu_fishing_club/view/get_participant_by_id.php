<?php


    include "../db_connect.php";
    require "../model/participant_db.php";
    require "show_participant.php";
    
    $term = $_REQUEST['search_term'];
    
    $result = get_participant_by_id($term);
    
    $response = get_table_header();
        
    if(empty($result))
    {
        $response = "Theres no participant with this ID.";
    }else
    {
        $response = $response.get_participant_text($result,true);
    }
        
    echo $response;  
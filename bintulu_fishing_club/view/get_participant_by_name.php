<?php

    include "../db_connect.php";
    require "../model/participant_db.php";
    require "show_participant.php";
    
    $term = $_REQUEST['search_term'];
    
    $results1 = get_participant_by_name($term);
    
        
        $blue = true;
        $response = get_table_header();
        
    if(empty($results1))
    {
        $response = "Theres no participant with this name.";
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
    

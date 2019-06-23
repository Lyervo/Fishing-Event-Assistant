<?php

    include "db_connect.php";

?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bintulu Fishing Club Event Helper</title>
    </head>
    <script>
    
    
    
    function display_participant()
    {
        
        var xmlReq = new XMLHttpRequest();
        xmlReq.onreadystatechange = function()
        {
            if (this.readyState == 4 && this.status == 200) 
            {
                document.getElementById("output_space").innerHTML = this.responseText;
            }
        };
        xmlReq.open("GET", "view/get_all_participants.php", true);
        xmlReq.send();
    }
    
    function add_participant()
    {
        var name = document.getElementById("insert_name").value;
        
        if(document.getElementById("insert_gender_m").checked)
        {
            var gender = "M";
        }else
        {
            var gender = "F";
        }
        
        if(document.getElementById("insert_fee").checked)
        {
            var fee = "paid";
        }else
        {
            var fee = "not paid";
        }
        
        if(name === "")
        {
            alert("Please enter the participant name.");
        }else
        {
            
            var xmlReq = new XMLHttpRequest();
            xmlReq.onreadystatechange = function()
            {
                if (this.readyState == 4 && this.status == 200) 
                {
                   document.getElementById("output_space").innerHTML = this.responseText;
                }
            };
            xmlReq.open("GET", "control/add_participant.php?name=" + name +"&gender="+ gender +"&fee=" + fee, true);
            xmlReq.send();
            
        }
        
    }
    
    function remove_participant(id)
    {
        var xmlReq = new XMLHttpRequest();
        xmlReq.onreadystatechange = function()
        {
            if (this.readyState == 4 && this.status == 200) 
            {
                document.getElementById("output_space").innerHTML = this.responseText;
            }
        };
        xmlReq.open("GET", "control/delete_participant_by_id.php?id=" + id, true);
        xmlReq.send();
    }
    
    function participant_form()
    {
        var xmlReq = new XMLHttpRequest();
        xmlReq.onreadystatechange = function()
        {
            if (this.readyState == 4 && this.status == 200) 
            {
                document.getElementById("output_space").innerHTML = this.responseText;
            }
        };
        xmlReq.open("GET", "model/participant_form.php", true);
        xmlReq.send();
    }
    
    function add_catch()
    {
        var id = document.getElementById("catch_id").value;
        var weight = document.getElementById("catch_weight").value;
        var type = document.getElementById("catch_type").value;
        var xmlReq = new XMLHttpRequest();
        xmlReq.onreadystatechange = function()
        {
            if (this.readyState == 4 && this.status == 200) 
            {
                document.getElementById("output_space").innerHTML = this.responseText;
            }
        };
        xmlReq.open("GET", "control/add_catch_by_id.php?id=" + id + "&weight="+weight+"&type="+type, true);
        xmlReq.send();
    }
    
    function catch_form(id)
    {
        var xmlReq = new XMLHttpRequest();
        xmlReq.onreadystatechange = function()
        {
            if (this.readyState == 4 && this.status == 200) 
            {
                document.getElementById("output_space").innerHTML = this.responseText;
            }
        };
        xmlReq.open("GET", "model/catch_form_by_id.php?id=" + id, true);
        xmlReq.send();
    }
    
    function show_catch(id)
    {

        var xmlReq = new XMLHttpRequest();
        xmlReq.onreadystatechange = function()
        {
            if (this.readyState == 4 && this.status == 200) 
            {
                document.getElementById("output_space").innerHTML = this.responseText;
            }
        };
        xmlReq.open("GET", "view/get_all_catch_by_id.php?id="+id, true);
        xmlReq.send();
    }
    
    function show_rank()
    {

        var xmlReq = new XMLHttpRequest();
        xmlReq.onreadystatechange = function()
        {
            if (this.readyState == 4 && this.status == 200) 
            {
                document.getElementById("output_space").innerHTML = this.responseText;
            }
        };
        xmlReq.open("GET", "view/rank_participant_by_catch.php", true);
        xmlReq.send();
    }
    
    </script>
    
    <style>
        
        
        
        #head_color
        {
            background-color: lemonchiffon;
        }
        
        .color_blue
        {
            background-color: #7dd0b6;
        }
        
        .color_red
        {
            background-color: #ff9999;
        }
        
       
        
        
    </style>
    
    
    <body>
        <button onclick="participant_form()">Register Participant</button>
        <button onclick="show_rank()">Show Rank</button>
        <button onclick="display_participant()">Display All Participants</button>
        
        <p id="output_space"></p>
    </body>
</html>

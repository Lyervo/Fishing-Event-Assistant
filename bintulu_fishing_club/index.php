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
    var delete_enabled = false;
    function init()
    {
        
        
    }
    
    function display_participant()
    {
        document.getElementById("confirmation").style.display = "none";
        delete_enabled = false;
        document.getElementById("delete_button").innerHTML = "Enable delete";
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
        document.getElementById("confirmation").style.display = "none";
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
        document.getElementById("confirmation").style.display = "none";
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
        document.getElementById("confirmation").style.display = "none";
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
        document.getElementById("confirmation").style.display = "none";
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
        document.getElementById("confirmation").style.display = "none";
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
        document.getElementById("confirmation").style.display = "none";
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
        document.getElementById("confirmation").style.display = "none";
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
    
    
    
    function delete_activate()
    {
        document.getElementById("confirmation").style.display = "none";
        if(delete_enabled)
        {
            delete_enabled = false;
            var buttons = document.getElementsByClassName("remove_button");
            for(var i = 0; i < buttons.length; i++)
            {
                buttons[i].style.display = "none";
            }
            document.getElementById("delete_button").innerHTML = "Enable delete";
        }else
        {
            delete_enabled = true;
            var buttons = document.getElementsByClassName("remove_button");
            for(var i = 0; i < buttons.length; i++)
            {
                buttons[i].style.display = "block";
            }
            document.getElementById("delete_button").innerHTML = "Disable delete";
        }
    }
    
    function search_participant()
    {
        document.getElementById("confirmation").style.display = "none";
        var search_term = document.getElementById("search_term").value;
        if(!isNaN(search_term))
        {
            var xmlReq = new XMLHttpRequest();
            xmlReq.onreadystatechange = function()
            {
                if (this.readyState == 4 && this.status == 200) 
                {
                    document.getElementById("output_space").innerHTML = this.responseText;
                }
            };
            xmlReq.open("GET", "view/get_participant_by_id.php?search_term="+search_term, true);
            xmlReq.send();
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
            xmlReq.open("GET", "view/get_participant_by_name.php?search_term="+search_term, true);
            xmlReq.send();
        }
    }
    
    function ask_confirmation()
    {
        document.getElementById("confirmation").style.display = "block";
        document.getElementById("output_space").innerHTML = "";
    }
    
    function clear_abort()
    {
        document.getElementById("confirmation").style.display = "none";
    }
    
    function clear_all()
    {
        document.getElementById("confirmation").style.display = "none";
        var xmlReq = new XMLHttpRequest();
            xmlReq.onreadystatechange = function()
            {
                if (this.readyState == 4 && this.status == 200) 
                {
                    document.getElementById("output_space").innerHTML = this.responseText;
                }
            };
            xmlReq.open("GET", "control/clear_all.php", true);
            xmlReq.send();
    }
    
    function random_pick()
    {
        document.getElementById("confirmation").style.display = "none";
        var xmlReq = new XMLHttpRequest();
            xmlReq.onreadystatechange = function()
            {
                if (this.readyState == 4 && this.status == 200) 
                {
                    document.getElementById("output_space").innerHTML = this.responseText;
                }
            };
            xmlReq.open("GET", "view/get_random_participant.php", true);
            xmlReq.send();
    }
    
    </script>
    
    <style>
        
        table
        {
            border-collapse: collapse;
            border: solid 1px black;
        }
        
        
        td,th
        {
            border: solid 1px black;
            text-align: center;
            padding-top: 3px;
            padding-bottom: 3px;
            padding-right: 7px;
            padding-left: 7px;
            
        }
        
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
    
    
    <body onload="init()">
        <button onclick="participant_form()">Register Participant</button>
        <button onclick="show_rank()">Show Rank</button>
        <button onclick="display_participant()">Display All Participants</button>
        <button onclick="random_pick()">Pick Random</button>
        <button onclick="delete_activate()" id="delete_button">Enable delete</button>
        <button onclick="ask_confirmation()">Delete all</button>
        
        <br>
        <input type="text" id="search_term" placeholder="Enter ID or name here..."><button onclick="search_participant()">Search</button>
        <div id="confirmation" style="display:none">Are you sure you want to delete all the participants and their catch?<br><button onclick="clear_all()">Yes</button><button onclick="clear_abort()">Cancel</button></div>
        <p id="output_space"></table></p>
    </body>
</html>

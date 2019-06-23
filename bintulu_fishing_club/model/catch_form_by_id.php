<?php

    $id = $_REQUEST['id'];
    
    $response = '<form>
    <span>Enter catch detail of participant No. '.$id.'</span>
    <br>
    <input type="hidden" id="catch_id" value="'.$id.'">
    <br>
    <input type="number" id="catch_weight" placeholder="Enter catch weight here...">
    <br>
    <input type="text" id="catch_type" placeholder="Enter catch type here...">
    <br>
    <button onclick="add_catch()">Add catch</button>
    
    </form>';
    echo $response;
    
?>


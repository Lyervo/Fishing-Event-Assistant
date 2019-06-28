<?php

function get_participant_text($result,$blue) 
{
    if($blue)
    {
        return "<tr class='color_blue'><td>" . $result['id'] . "</td><td>" . $result['name'] . "</td><td>" . $result['gender'] . "</td><td><button onclick='set_fee(" . $result['id'] . ")'>" . $result['fee'] . "</button></td>"
            . "<td><button onclick='show_catch(" . $result['id'] . ")'>See Catch</button></td>"
            . "<td><button onclick='catch_form(" . $result['id'] . ")'>Add Catch</button></td>"
            . "<td class='remove_button remove_button_td' style=' display : none'><button onclick='remove_participant(" . $result['id'] . ")'>Remove</button></td></tr>";
    }else
    {
        return "<tr class='color_red'><td>" . $result['id'] . "</td><td>" . $result['name'] . "</td><td>" . $result['gender'] . "</td><td><button onclick='set_fee(" . $result['id'] . ")'>" . $result['fee'] . "</button></td>"
            . "<td><button onclick='show_catch(" . $result['id'] . ")'>See Catch</button></td>"
            . "<td><button onclick='catch_form(" . $result['id'] . ")'>Add Catch</button></td>"
            . "<td class='remove_button remove_button_td' style=' display : none'><button onclick='remove_participant(" . $result['id'] . ")'>Remove</button></td></tr>";
    }
}

function get_table_header()
{
    return "<table><tr id='head_color'><th>ID</th><th>Name</th><th>Gender</th><th>Fees</th><th></th><th></th><th class='remove_button remove_button_header' style=' display : none'></th></tr>";
}

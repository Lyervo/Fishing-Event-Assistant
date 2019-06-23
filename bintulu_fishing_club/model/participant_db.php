<?php

function get_participant_name_by_id($id)
{
    global $db;
    $query1 = "select name from participants where id=".$id;
    $statement1 = $db->prepare($query1);
    $statement1->execute();
    $results1 = $statement1->fetch();
    $statement1->closeCursor();
    return $results1['name'];
}
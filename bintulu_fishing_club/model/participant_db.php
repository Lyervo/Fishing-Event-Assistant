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

function get_participant_by_name($term)
{
    global $db;
    $query1 = "select * from participants where name like '%".$term."%' or name like '%".$term."' or name like '".$term."%'";
    $statement1 = $db->prepare($query1);
    $statement1->execute();
    $results1 = $statement1->fetchAll();
    $statement1->closeCursor();
    return $results1;
}

function get_participant_by_id($id)
{
    global $db;
    $query1 = "select * from participants where id=".$id;
    $statement1 = $db->prepare($query1);
    $statement1->execute();
    $results1 = $statement1->fetch();
    $statement1->closeCursor();
    return $results1;
}

function random_pick()
{
    global $db;
    $query1 = "SELECT * FROM participants ORDER BY RAND() LIMIT 1";
    $statement1 = $db->prepare($query1);
    $statement1->execute();
    $results1 = $statement1->fetch();
    $statement1->closeCursor();
    return $results1;
}
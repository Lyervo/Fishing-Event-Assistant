<?php

    if(!isset($_SESSION))
    {
        session_start();
    }
    $dsn = 'mysql:host=localhost;dbname=bintulu_fishing_club';
    try {
        
            $db = new PDO($dsn,"root", "");
        
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        exit();
    }
?>
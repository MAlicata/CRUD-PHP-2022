<?php

    $publisher_id = 1;

    $pdo = require 'Connection.php';

    
    // construct the delete statement
    $sql = 'DELETE FROM publishers
    WHERE publisher_id = :publisher_id';
    
    // prepare the statement for execution
    $statement = $pdo->prepare($sql);
    $statement->bindParam(':publisher_id', $publisher_id, PDO::PARAM_INT);
    
    // execute the statement
    if ($statement->execute()) {
        echo 'publisher id ' . $publisher_id . ' was deleted successfully.';
    }
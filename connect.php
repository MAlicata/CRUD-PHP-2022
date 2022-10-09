<?php 

    require 'config.php';

    

function connect($host, $db, $user, $password, $port)
{
    $dsn = "mysql:host=$host;port=$port;dbname=$db;charset=UTF8";

    try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

        $conn = new PDO($dsn, $user, $password, $options);

        if ($conn) {
            echo "Connected to the $db database successfully!";
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
  
return connect($host, $db, $user, $password, $port);
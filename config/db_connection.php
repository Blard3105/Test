<?php
    $host = "localhost"; 
    $username = "postgres"; 
    $password = "PCamilo";
    $dbname = "parcial";
    $port = "5432";
    
    $data_connection = "
    host=$host
    port=$port
    dbname=$dbname
    user=$username
    password=$password
    ";

    $conn = pg_connect($data_connection);

    if(!$conn){
        die("Connection failed: ". pg_last_error());
    }else{
        echo "Connected successfully";
    }

?>
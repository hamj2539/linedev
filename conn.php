<?php

    $host = '127.0.0.1';
    $user = 'root';
    $pass = '';
    $dbname = 'linewebapp';


    try{
        $conn = mysqli_connect($host,$user,$pass,$dbname);
    if($conn){
               }
    } catch (PDOException $e){
        echo $e->getmessage();
    }
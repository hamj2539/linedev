<?php

    $host = '192.168.16.130';
    $user = 'root';
    $pass = 'Sundae1234#';
    $dbname = 'linewebapp';


    try{
        $conn = mysqli_connect($host,$user,$pass,$dbname);
    if($conn){
               }
    } catch (PDOException $e){
        echo $e->getmessage();
    }
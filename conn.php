<?php

    $host = '192.168.16.130\SQLSERVER2016';
    $user = 'sa';
    $pass = 'Sundae1234#';
    $dbname = 'linedev';


    try{
        $conn = new PDO("sqlsrv:Server=$host;Database=$dbname", $user, $pass);
    if($conn){
               }
    } catch (PDOException $e){
        echo $e->getmessage();
    }  
<?php

function conn(){
        //db config and credentials.
        $dbType = 'mysql';
        $host = 'localhost';
        $port = '3306';
        $dbname = 'test';
        $user = 'michael';
        $pass = '1234';

        $pdo = new PDO("mysql:host=localhost;port=3306;dbname=test",$user,$pass);
        
        //Hide the error from the user.
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        return $pdo;
    }

  
?>
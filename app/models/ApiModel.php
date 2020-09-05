<?php 
require_once('pdo.php');

//simple fetch for all the content in the table.
function fetchAll($table){
    //Connection to the database.
    $pdo = conn();

    try{
        //send the query to the db
        $query = "SELECT * FROM users";
        $stmt = $pdo->query($query);
    
        //fetch the query
        $data = array();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $data[count($data)] = $row;
        }
    }
    catch(Exception $err){
        $data = ['message' => 'insertion failed. ERR:'.$err];
    }
    finally{
        $pdo = null;
    }
    return $data;
}

//this insert data to the table
function addNew($insert){
    
    //Connection to the database.
    $pdo = conn();

    //insert data in users
    $name = $insert[0];
    $last = $insert[1];
    $pass = $insert[2];
    $email = $insert[3];
    try{
        $query = "INSERT INTO users (FIRSTNAME, LASTNAME, PASS, EMAIL) VALUES (:name, :last, :pass, :email)";
        $stmt = $pdo->prepare($query);
        $stmt->execute(array(':name'=>$name, ':last'=>$last, ':pass'=>$pass, ':email'=>$email));
        $data = ['message' => 'insertion completed'];
    } 
    
    catch(Exception $err){
        $data = ['message' => 'insertion failed. ERR:'.$err];
    }

    finally{
        $pdo = null;
    }
    
    return $data;
}
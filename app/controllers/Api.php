<?php
/*
    The server RESTful API will check the request method, so you can send a 
    get, post, put or delete request with diferents parameters to the queries,
    and the Models will deal with the database connection.
    
    This API, and the route /api are the end point in the server.
    The responses are sended back in a JSON format.
*/

require_once('app/models/ApiModel.php');

function api(){

    //default response
    $data = ['message'=>'invalid query request'];

    //get requests
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        if(isset($_GET["users"])){
            $data = fetchAll("users");
        }
    }

   //post requests
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_GET["fname"]) && isset($_GET["lname"]) && isset($_GET["pass"]) && isset($_GET["email"])){ 
            
            $insert = [$_GET['fname'],$_GET['lname'],$_GET['pass'],$_GET['email']]; 
            $data = addNew($insert);
        }
    }

    //put requests
    if($_SERVER["REQUEST_METHOD"] == "PUT"){
        if(isset($_GET["action"])){
            $data = ["message"=>"put test received"];
        }
    }

    //delete reeusts
    if($_SERVER["REQUEST_METHOD"] == "DELETE"){
        
        if(isset($_GET["action"])){
            $data = ["message"=>"delete test received"];
        }

    }

    //final response.
    echo json_encode($data);
}

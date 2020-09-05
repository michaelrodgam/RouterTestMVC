<?php

function api(){
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        if($_GET["action"]=="test"){
            $data = ["message"=>"get test received"];
        }
    }

   
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if($_GET["action"] == "test"){    
            $data = ["message"=>"post test received"];
        }
    }

    if($_SERVER["REQUEST_METHOD"] == "PUT"){
        if($_GET["action"] == "test"){ 
            $data = ["message"=>"put test received"];
        }
    }

    if($_SERVER["REQUEST_METHOD"] == "DELETE"){
        if($_GET["action"]=="test"){
            $data = ["message"=>"delete test received"];
        }
    }
    echo json_encode($data);
}

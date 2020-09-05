<?php

function createView($type){
    if($type == 'chat'){
        header('location: http://localhost/ao/chatServer');
    }
    if($type == 'public'){
        header('location: http://localhost/ao/public/index.html');
    }
    else{
        echo("<h3>Hello from the ".$type." view, in the controller folder.</h3>");
    }
}

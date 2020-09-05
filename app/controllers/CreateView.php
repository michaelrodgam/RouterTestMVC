<?php

/*
    This controller will call the view functions,
    modify the views with the data from the models, or redirect to public resources.
    
    The $type parameter is a string, to identify the actions.
    The createView controller could require others controllers for complex logic.
*/

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

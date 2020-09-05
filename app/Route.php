
<?php

/*
    This class makes Routes for the Router.
    the $route must be a string.
    the $controller must be a function.
*/

class Route{
    
    public function __construct($route, $controller){
        $this->route = $route;
        $this->controller = $controller;
    }

    //call the controller function of the route
    function get(){
        $this->controller->__invoke();
    }

    //return the route name
    public function getRoute(){
        return $this->route;
    }

    
}

<?php

class Route{
    
    public function __construct($route, $controller){
        $this->route = $route;
        $this->controller = $controller;
    }

    function get(){
        $this->controller->__invoke();
    }

    public function getRoute(){
        return $this->route;
    }

    
}
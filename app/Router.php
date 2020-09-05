<?php
    require_once('Route.php');
    require_once('controllers/Controller.php');
    
    class Router{
       
        public function __construct(){
            
            $this->validRoutes = array();
            

            //please add more routes below here if you want, the Router will handle it.

            $this->validRoutes[] = new Route('contact', function(){
                echo('contact function');
            });
            
            $this->validRoutes[] = new Route('index', function(){
                echo('index function');
            });

            $this->validRoutes[] = new Route('about', function(){
                Controller::createView();
            });
        
        
        
        }

        //this function turns on the Router
        function listen($url){
            $error = "ERROR:: 404. Page not found.";
            $missing = true;
            $i = 0;
            
            while($missing && $i < count($this->validRoutes)){
                if($this->validRoutes[$i]->getRoute() == $url){
                    $this->validRoutes[$i]->get();
                    $missing = false;
                }
                $i++;
            }
            if($missing){
                echo('<h3>'.$error." URL: ".$url.'</h3>');
                echo('<a href="http://localhost/ao/index">Home Page</a><br>');
                echo('<a href="http://localhost/ao/public/index.html">Projects</a>');
            }
        }

    }
?>
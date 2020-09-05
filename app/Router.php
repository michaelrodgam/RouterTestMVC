<?php
    /* 
        This class handles all the logic of the Routes, with the .htaccess, in order to contact the controllers.
        An instance of this class protect the server resources and hide the file extensions.

        The $host must be the default directory of the server, where index.php and .htaccess exists.
    */

    require_once('Route.php');
    require_once('controllers/CreateView.php');
    require_once('controllers/Api.php');
    
    class Router{
       
        public function __construct($host){
            $this->host = $host;
            $this->validRoutes = array();
            

            
            //index it's the default route.
            $this->validRoutes[] = new Route('index', function(){
                createView('index');
            });

            /*
                Add more routes below here if you want, the Router will handle it. 
            */

            $this->validRoutes[] = new Route('public', function(){
                createView('public');
            });
            
            $this->validRoutes[] = new Route('about', function(){
                createView('about');
            });

            $this->validRoutes[] = new Route('chat', function(){
                createView('chat');
            });

            //this route uses the RESTful Api.
            $this->validRoutes[] = new Route('api', function(){
                api();
            });
        
        
        }

        //this function turns on the Router, and it wait for requests
        function listen($url){
            $error = "ACCESS DENIED 401.";
            $missing = true;
            $i = 0;
            
            while($missing && $i < count($this->validRoutes)){
                if($this->validRoutes[$i]->getRoute() == $url){
                    $this->validRoutes[$i]->get();
                    $missing = false;
                }
                $i++;
            }

            //if the url do not exist in the router, this redirect the request to the index route
            if($missing){
                header('location:'.$this->host.'/index');
            }
        }

    }
?>
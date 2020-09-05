<?php

    /*This is the enter point to the server*/

    require_once('./app/Router.php');

    //the app is a router instance, with the default route.
    $app = new Router('http://localhost/ao');

    //the app will listen all the request and redirect through the routes.
    $app->listen($_GET['url']);

?>
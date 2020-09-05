<?php
    require_once('./app/Router.php');

    $server = new Router();

    $server->listen($_GET['url']);

    echo('<p>moded:'.$_GET['url'].'</p>');
    echo('<p>real:'.$_SERVER['REQUEST_URI'].'</p>');
    
?>
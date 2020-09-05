<?php
    require_once('./app/Router.php');

    $server = new Router('http://localhost/ao');

    $server->listen($_GET['url']);

    //Debug/*
    echo('<p>moded:'.$_GET['url'].'</p>');
    echo('<p>real:'.$_SERVER['REQUEST_URI'].'</p>');
    
?>
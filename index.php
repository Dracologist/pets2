<?php
    require_once('vendor/autoload.php');
    $f3 = Base::instance();

    $f3->route('GET /', function() {
        $view = new View;    echo $view->render
        ('views/home.html');
    });

    $f3->route('GET /show/cat', function(){

    echo '<h1>Cat</h1>';
    });

    $f3->route('GET /show/dog', function(){

    echo '<h1>Dog</h1>';
    });

    $f3->run();
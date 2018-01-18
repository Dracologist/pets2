<?php
    session_start();
    require_once('vendor/autoload.php');
    $f3 = Base::instance();

    $f3->route('GET /', function() {
        $view = new View;    echo $view->render
        ('views/home.html');
    });

    $f3->route('GET /show/cat', function(){

    echo '<img src="https://s7d1.scene7.com/is/image/PETCO/cat-category-090617-369w-269h-hero-cutout-d?fmt=png-alpha">';
    });

    $f3->route('GET /show/dog', function(){

    echo '<img src="https://s7d1.scene7.com/is/image/PETCO/dog-category-090617-369w-269h-hero-cutout-d?fmt=png-alpha">';
    });

    $f3->route('GET /order', function() {

        echo '<h1>Form 1</h1>';
    });
    $f3->route('GET /order2', function() {

        echo '<h1>Form 2</h1>';
    });
    $f3->route('GET /order2', function() {

        echo '<h1>Form 2</h1>';
    });

    $f3->run();
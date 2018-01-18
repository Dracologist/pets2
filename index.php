<?php
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

    $f3->run();
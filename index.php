<?php
    session_start();
    require_once('vendor/autoload.php');
    $f3 = Base::instance();
    $f3->set('colors', array('pink', 'green', 'blue'));

    $f3->route('GET /', function() {
        $view = new View;
        echo $view->render('views/home.html');
    });

    $f3->route('GET /show/cat', function(){

    echo '<img src="https://s7d1.scene7.com/is/image/PETCO/cat-category-090617-369w-269h-hero-cutout-d?fmt=png-alpha">';
    });

    $f3->route('GET /show/dog', function(){

    echo '<img src="https://s7d1.scene7.com/is/image/PETCO/dog-category-090617-369w-269h-hero-cutout-d?fmt=png-alpha">';
    });

    $f3->route('GET /order', function() {
        $view = new View;
        echo $view->render('views/form1.html');
    });
    $f3->route('POST /order2', function() {
        $_SESSION['animal'] = $_POST['animal'];
        $view = new View;
        echo $view->render('views/form2.html');
    });
    $f3->route('POST /results', function($f3) {
        $f3->set('color', $_POST['color']);
        $f3->set('animal', $_SESSION['animal']);
        echo '<h1>Results page</h1>';
        echo '<p>Thank you for ordering a(n) ' . $f3->get('color') . " " . $f3->get('animal') . "!</p>";
    });
    $f3->route('GET|POST /new-pet', function($f3) {
        $template = new Template;
        $f3->set('test', 'test');
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $color = $_POST['color'];
            $type = $_POST['type'];
            $success = false;
            include ('model/validate.php');
            if(validColor($color)){
                $f3->set('color', $color);
            }
            if(validString($name)){
                $f3->set('name', $name);
            }
            if(validString($type)){
                $f3->set('type', $type);
            }
            $f3->set('success', $success);
        }
        echo $template->render('views/form.html');
    });

    $f3->run();
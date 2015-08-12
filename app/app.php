<?php
    //Loading vendor files and RPSGenerator class
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RPSGenerator.php";

    //Calling debugger
    use Symfony\Component\Debug\Debug;
    Debug::enable();

    //Calling silex framework
    $app = new Silex\Application();
    $app['debug'] = true; //calling debugger

    //Getting silex framework
    $app->register(new Silex\Provider\TwigServiceProvider(), array (
        'twig.path' => __DIR__.'/../views'
    ));

    //setting index page for retrieving inputs
    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig');
    });

    //retrieving user inputs, setting instance, using makeRPS method, then posting result
    $app->get("/view_result", function() use ($app) {
        $rps = new RPSGenerator;
        $rps_result = $rps->makeRPS($_GET['player_one'], $_GET['player_two']);
        return $app['twig']->render('result.html.twig', array ('result' => $rps_result));
    });

    return $app;

?>

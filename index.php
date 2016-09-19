<?php

require_once __DIR__.'/vendor/autoload.php';

use Silex\Application;

$app = new Silex\Application();

$app['debug'] = true;

$app->get('/hello/{name}', function ($name) use ($app) {
    return 'Hello '.$app->escape($name);
});

$app->get('/', function() use ($app){
    die(var_dump($app));
   return "true" ;

});

$app->run();

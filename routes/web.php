<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/version', function () use ($router) {
    return $router->app->version();
});

$router->get('/saludo/{nombre}', function ($nombre) {
    return 'Hola mi nombre es Violet' . $nombre;

});
$router->delete('/saludo', function(){
    return "delete delete";

});



$router->get('/calcular/{edad}', function($edad){
    if($edad>0 && $edad <18){
        return 'eres menor de edad';
    }elseif ($edad >= 18 && $edad <=100){
        return 'eres mayor de edad';
    }else{
        return 'edad erronea';
    }
});





$router->post('/saludo', function(){
    return "post post";

});
$router->put('/saludo', function(){
    return "get get";

});

<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Proto\BaseModel;
use App\Proto\People;
use App\Proto\Person;

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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/proto', function () use ($router) {
    $people = new People();
    $people->setPeople([
        (function () {
            $p = new Person();
            $p->setBaseModel((function () {
                $bm = new BaseModel();
                $bm->setId(1);

                return $bm;
            })());
            $p->setName('Valian Masdani');
            $p->setAddress('Indonesia');

            return $p;
        })(),
        (function () {
            $p = new Person();
            $p->setBaseModel((function () {
                $bm = new BaseModel();
                $bm->setId(2);

                return $bm;
            })());
            $p->setName('Shania N');
            $p->setAddress('Indonesia');


            return $p;
        })(),
    ]);



    return response($people->serializeToJsonString())
        ->header('content-type', 'application/json');
});

$router->get('/proto-parse', function () use ($router) {
    $p = new Person;
    $p->mergeFromJsonString('{
        "name": 60000
    }');

    return response($p->serializeToJsonString())
        ->header('content-type', 'application/json');
});
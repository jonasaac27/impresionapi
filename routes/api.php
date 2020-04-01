<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::resource('empleado','empleadoController');

    $router->group(["prefix" => "empleado"], function () use ($router){
        $router->get("{run}/{division}",'empleadoController@show');
        $router->get("{division}",'empleadoController@showAll');
        $router->get("",'empleadoController@test');
    });

    $router->group(["prefix"=> "licencia"], function () use ($router){
        $router->get("{division}","licenciaController@showAll");
    });

    $router->group(["prefix"=> "usuarios"],function () use ($router){
        $router->get("","usuariosController@showAll");
        $router->get("{usuario}/{pass}", "usuariosController@validar");
    });


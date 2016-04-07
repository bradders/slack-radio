<?php

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

//$app->get("/", "CodeController@index");
$app->get("/", function() {
  return view("home")->with( "codes", App\Code::all() );
});
$app->get("/code", "CodeController@index");

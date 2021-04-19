<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/queries/{event}', function($event){
    $events = \App\Event::all();//select * from events
    $events = \App\Event::all(['title','description']); /* Pra vc filtrar, ex SELECT title,desciption FROM events */
    $events = \App\Event::where('id', 1)->get();//select * from events where id= x
    $events = \App\Event::where('id', 1)->first();//select * from events where id= x chama só as informações ao invés de uma coleção de arrays
    $events = \App\Event::find($event);//select * from events where id= x -> forma simplificada

    return $events;
});

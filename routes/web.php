<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\TasksController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [
    'as' => 'home',
    'uses' => 'PagesController@home'
]);

Route::get('/tasks', [
    'as' => 'tasks.index',
    'uses' => 'TasksController@index'
]);

Route::get('/create', [
    'as' => 'tasks.create',
    'uses' => 'TasksController@create'
]);

Route::post('/store', [
    'as' => 'tasks.store',
    'uses' => 'TasksController@store'
]);

Route::get('/show/{id}', [
    'as' => 'tasks.show',
    'uses' => 'TasksController@show',
]);

Route::get('/edit/{id}', [
    'as' => 'tasks.edit',
    'uses' => 'TasksController@edit',
]);

Route::put('/update/{id}', [
    'as' => 'tasks.update',
    'uses' => 'TasksController@update',
]);

// Route::post('update/{id}', function ($id) {
//     TasksController::class
// });
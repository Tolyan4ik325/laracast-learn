<?php

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


Route::get('/', 'PagesController@home');


// Route::get('/', function () {

// 	$tasks = [
// 		'Go to the store',
// 		'Go to the market',
// 		'Go to work'
// 	];

//     // return view('welcome', ['tasks' => $tasks]);
// 	return view('welcome')->withTasks($tasks);

// });




Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::resource('projects', 'ProjectController');

// Route::get('/projects', 'ProjectController@index');
// Route::get('/projects/{project}', 'ProjectController@show');
// Route::post('/projects', 'ProjectController@store');
// Route::get('/projects/create', 'ProjectController@create');
// Route::get('/projects/{project}/edit', 'ProjectController@edit');
// Route::patch('/projects/{project}', 'ProjectController@update');
// Route::delete('/projects/{project}', 'ProjectController@destroy');
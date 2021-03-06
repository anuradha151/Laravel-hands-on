<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', 'PagesController@indexContactUs');
Route::get('/about', 'PagesController@indexAboutUs');
Route::get('/tasks', function () {
    $data = App\Task::all();
    return view('task')->with('tasks', $data);
});
Route::post('/saveTask', 'TaskController@saveTask');
Route::get('/markAsCompleted/{id}', 'TaskController@markAsCompleted');
Route::get('/markAsNotCompleted/{id}', 'TaskController@markAsNotCompleted');
Route::get('/deleteTask/{id}', 'TaskController@deleteTask');

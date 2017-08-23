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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('page_home');
});

Route::get('connect', [
    'as' => 'connect.get',
    'uses' => 'ConnectController@show'
]);

Route::post('connect', [
    'as' => 'connect.post',
    'uses' => 'ConnectController@index'
]);


Route::get('quiz', [
    'as' => 'quiz',
    'uses' => 'QuizController@index'
]);

Route::post('quiz', [
    'as' => 'count',
    'uses' => 'QuizController@count'
]);

// Route::resource('count', 'CounterController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('result', function() {
    return view('page_result');
})->name('result');

Route::get('history', [
    'as' => 'history',
    'uses' => 'HistoryController@index'
]);


// Route::resource('admin/users', 'AdminUsersController');
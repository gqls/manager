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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

$router->group([
    'namespace' => 'Domains',
    //'middleware' => 'auth'
], function () {
    Route::get('domains', 'DomainNameController@index');
    Route::get('domains/{slug}', 'DomainNameController@showDomain');
    Route::get('domains/upload', 'DpmainNameController@upload');
});
Route::get('tag/create', 'TagController@ctagDomain');


$router->group([
    'namespace' => 'Sites',
    //'middleware' => 'auth'
], function () {
    Route::get('sites', 'DomainSiteController@index');
    Route::get('sites/{slug}', 'DomainSiteController@showDomain');
    Route::get('sites/upload', 'DpmainSiteController@upload');
});

$router->group([
    'namespace' => 'GA85',
    //'middleware' => 'auth'
], function () {
    Route::get('ga85', 'GA85Controller@indexAction');
});

$router->group([
    'namespace' => 'Emailer',
    //'middleware' => 'auth'
], function() {
    Route::get('emailer', 'EmailerController@indexAction');
});

$router->group([
    'namespace' => 'Todos',
    //'middleware' => 'auth'
], function() {
    Route::get('todo', 'TodoController@indexAction');
    Route::post('todo', 'ToDoController@update');
});

$router->group([
    'namespace' => 'Automation'
], function() {
    Route::get('autotest', 'GoutteController@test');
});

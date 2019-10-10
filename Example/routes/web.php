<?php

use App\Http\Controllers\TestController;
use Models\UserModel;

Route::get('/', function () {
    return view('hello');
});

    Route::get('/hello', function () {
        return view('hello');
    });
    
Route::post('/whoami','WhatsMyName@index');

Route::get('/askme', function () { return view('whoami'); }); 

Route::get('/test2', 'TestController@test');

Route::get('/login', function () { return view('Login2'); });

Route::get('/loginF', function () { return view('LoginFailed'); });

Route::get('/loginP', function () { return view('LoginPassed2'); });


Route::post('/dologin','LoginController@index');


//Code from assignment.
Route::get('/login2', function ()
{
    return view('login2');
});


<?php

Route::get('/', function () {
    return redirect('/index');
});

Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');
Route::get('auth/geetest','Auth\AuthController@getGeetest');


Route::get('/logout', 'Auth\AuthController@getLogout');

Route::get('/register', function() {
    return view("auth.register");
});

Route::post('/register', 'UserController@handleRegister');

Route::get('/send','UserController@sendMail');  // 发送激活邮件
Route::get('/active', 'UserController@activeAccount'); // 激活确认

Route::get('password/email', 'Auth\PasswordController@getEmail');

Route::post('password/email', 'Auth\PasswordController@postEmail');

Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');

Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::get('/index', function() {
    return view("auth.index");
});

Route::get('/about_me', function() {
    return view("auth.about_me");
});

Route::get('/photo', function() {
    return view("auth.photogo");
});


Route::get('/focus', [
    'middleware' => 'auth',
    'uses' => 'UserController@authenticate'
]);

Route::get('/focus', ['middleware' => 'auth', function() {
    return view("dashboard.player");
}]);
Route::get('/fa', ['middleware' => 'auth', function() {
    return view("dashboard.fa");
}]);
Route::get('/ac', ['middleware' => 'auth', function() {
    return view("dashboard.ac");
}]);
Route::get('/ca', ['middleware' => 'auth', function() {
    return view("dashboard.ca");
}]);
Route::get('/un', ['middleware' => 'auth', function() {
    return view("dashboard.un");
}]);
Route::get('/wi', ['middleware' => 'auth', function() {
    return view("dashboard.wi");
}]);
Route::get('/ra', ['middleware' => 'auth', function() {
    return view("dashboard.ra");
}]);
Route::get('/slides', ['middleware' => 'auth', function() {
    return view("dashboard.slides");
}]);
Route::get('/track', ['middleware' => 'auth', function() {
    return view("dashboard.track");
}]);
Route::get('/rest', ['middleware' => 'auth', function() {
    return view("dashboard.rest");
}]);

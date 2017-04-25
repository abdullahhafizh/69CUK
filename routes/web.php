<?php
Auth::routes();

Route::get('/','HomeController@index');

Route::get('legendary', function () {
    return view('legendary');
});

Route::get('post-{id}', function () {
    return view('post');
});

Route::get('shuffle', 'HomeController@acak');

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/entry',function () {
    return view('auth/login');
});



Route::get('home', 'HomeController@index');

Route::get('hp',function () {
    return view('hp');
});

Route::get('user', 'UserPageController@index');
Route::get('/of-{id}', 'UserPageController@show');
// Route::get('/of-{id}', function ($id) {
//     return '($id)';
//     // 'user '.$id;
// });

Route::get('upload', 'UploadController@index');
// Route::get('upload', function () {
//     return view('upload');
// })->middleware('auth');

Route::post('upload/save','UploadController@save');

// Auth::routes();

// Route::get('/home', 'HomeController@index');
// Route::get('/', 'HomeController@index');
<?php
Auth::routes();

Route::get('/','HomeController@index');
Route::get('/images/{filename}', function ($filename)
{
	$path = storage_path('sampul') . '/' . $filename;

	$file = File::get($path);
	$type = File::mimeType($path);

	$response = Response::make($file);
	$response->header("Content-Type", $type);

	return $response;
});
// Route::get('legendary', function () {
//     return view('legendary');
// });

Route::get('kocak-{id}', 'HomeController@detail');
Route::get('shuffle', 'HomeController@getRandomPost');
Route::get('shuffle/{id}', 'HomeController@show')->name('random');
Route::get('/logout', 'Auth\LoginController@logout');
Route::post('/search', 'HomeController@search');

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

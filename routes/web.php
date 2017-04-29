<?php

Route::get('shuffle', 'HomeController@getRandomPost');
Route::get('kocak-{id}', 'HomeController@detail')->name('detail');
Route::get('home', 'HomeController@home');
Route::get('/','HomeController@index');

Route::get('upload', 'UploadController@index');
Route::get('list','UploadController@list');

Route::get('/of-{id}', 'UserPageController@show');
Route::get('user', 'UserPageController@index');

Route::get('privacy', function () {
	return view('about/privacy');
});
Route::get('terms', function () {
	return view('about/terms');
});

Route::post('/search', 'HomeController@search');

Route::post('upload/save','UploadController@save');

// Route::get('legendary', function () {
//     return view('legendary');
// });

Route::get('/images/{filename}', function ($filename)
{
	$path = storage_path('sampul') . '/' . $filename;

	$file = File::get($path);
	$type = File::mimeType($path);

	$response = Response::make($file);
	$response->header("Content-Type", $type);

	return $response;
});
Route::get('logout', 'Auth\LoginController@logout');
Route::get('/entry',function () {
    return view('auth/login');
});
Route::get('password',function () {
	return view('password');
});
Auth::routes();

////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('index.axd', 'HomeController@home');
Route::get('index.asx', 'HomeController@home');
Route::get('index.asmx', 'HomeController@home');
Route::get('index.ashx', 'HomeController@home');
Route::get('index.aspx', 'HomeController@home');
Route::get('index.asp', 'HomeController@home');
Route::get('index.css', 'HomeController@home');
Route::get('index.cfm', 'HomeController@home');
Route::get('index.yaws', 'HomeController@home');
Route::get('index.swf', 'HomeController@home');
Route::get('index.html', 'HomeController@home');
Route::get('index.htm', 'HomeController@home');
Route::get('index.xhtml', 'HomeController@home');
Route::get('index.jhtml', 'HomeController@home');
Route::get('index.jsp', 'HomeController@home');
Route::get('index.jspx', 'HomeController@home');
Route::get('index.wss', 'HomeController@home');
Route::get('index.do', 'HomeController@home');
Route::get('index.action', 'HomeController@home');
Route::get('index.js', 'HomeController@home');
Route::get('index.pl', 'HomeController@home');
Route::get('index.php', 'HomeController@home');
Route::get('index.php4', 'HomeController@home');
Route::get('index.php3', 'HomeController@home');
Route::get('index.phtml', 'HomeController@home');
Route::get('index.py', 'HomeController@home');
Route::get('index.rb', 'HomeController@home');
Route::get('index.rhtml', 'HomeController@home');
Route::get('index.shtml', 'HomeController@home');
Route::get('index.xml', 'HomeController@home');
Route::get('index.rss', 'HomeController@home');
Route::get('index.svg', 'HomeController@home');
Route::get('index.cgi', 'HomeController@home');
Route::get('index.dll', 'HomeController@home');
////////////////////////////////////////////////////////////////////////////////////////////////////
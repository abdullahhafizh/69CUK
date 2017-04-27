<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// id 757520652681-6o0p7858pi4f3euah053je0o34ksfjsq.apps.googleusercontent.com
// rahasia sXV6ixmF2_nr7Q69nY57rCsz

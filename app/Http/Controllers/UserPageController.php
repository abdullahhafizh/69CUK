<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class UserPageController extends Controller
{
    public function index()
    {
    	return view('user');
    }

    public function list()
    {
        $data = Auth::user();
        return redirect()->route('of', ["id" => $data->id]);
    }

    public function of($id)
    {    
        $data['artikel'] = \App\Artikel::where('user_id', $id)->orderBy('created_at', 'desc')->get();
        return view('home')->with($data);    
  }

}

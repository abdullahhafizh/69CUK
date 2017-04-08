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

    public function show($id)
    {
        $data['users'] = \App\User::find($id);
        if (!$data['users']){ abort(404); }    
        return view('user')->with($data);
    	// return view('user', ['blog' => $id]);
    }

    public function viewProfile($id = null) {
    // $data['users'] = \App\User::find($id);
    // if (!$data['users']){ abort(404); }    
    // return view('user')->with($data);
    }
}

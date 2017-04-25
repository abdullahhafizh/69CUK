<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function acak()
    {
        $collection = collect([1, 2, 3, 4, 5]);
        $id = $collection->shuffle();
        $id->all();        
        return redirect(url('/post{$id}'));
    }
}

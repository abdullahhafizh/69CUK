<?php

namespace App\Http\Controllers;

use App\User;
use App\Artikel;
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
    public function index(){
        $data['artikel'] = \App\Artikel::paginate(0);
        $data['user'] = \App\User::paginate(0);
        return view('home')->with($data);
    }

    public function search(Request $request){
      $query = $request->get('q');
      $hasil = \App\Artikel::where('judul', 'LIKE', '%' . $query . '%')->paginate(10);
      // dd($query);
      return view('result', compact('hasil', 'search'));
      return view('home', compact('hasil', 'search'));
    }
    public function acak()
    {
        $collection = collect([1, 2, 3, 4, 5]);
        $id = $collection->shuffle();
        $id->all();
        return redirect(url('/post{$id}'));
    }
}

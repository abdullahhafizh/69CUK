<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Artikel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /*    
     * @return \Illuminate\Http\Response
     */    

    public function index(){
        $data['artikel'] = \App\Artikel::orderBy('created_at', 'desc')->paginate(6);
        // $data['user'] = \App\User::find(Auth::user()->id);
        return view('home')->with($data);        
    }

    public function detail($id){
        $data['artikel'] = \App\Artikel::find($id);
        return view('legendary')->with($data);
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

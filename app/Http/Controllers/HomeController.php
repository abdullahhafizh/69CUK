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
    public function home(){
      return redirect(url('/'));
    }

    public function index(){
      $data['artikel'] = \App\Artikel::orderBy('created_at', 'desc')->paginate(6);
        // $data['user'] = \App\User::find(Auth::user()->id);
      return view('home')->with($data);        
    }
    public function getRandomPost() {
      if ($post=\App\Artikel::get()->isEmpty())
      {
        return redirect (url('/'));
      }
      $post = Artikel::inRandomOrder()->first();      
      return redirect()->route('random', ["id" => $post->id]);
    }

    public function show($id) {
      $post = Artikel::findOrFail($id);
      return view('shuffle', compact('post'));
    }

    public function detail($id){
      $data['artikel'] = \App\Artikel::find($id);
      return view('legendary')->with($data);
    }

    public function search(Request $request){
      $query = $request->get('q');
      $hasil = \App\Artikel::where('judul', 'LIKE', '%' . $query . '%')->orderBy('created_at', 'desc')->paginate(6);
      // dd($query);
      return view('result', compact('hasil', 'search'));
      return view('home', compact('hasil', 'search'));
    }

  }

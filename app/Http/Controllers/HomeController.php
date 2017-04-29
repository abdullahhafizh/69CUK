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
      if ($data=\App\Artikel::get()->isEmpty())
      {
        return redirect (url('/'));
      }
      $data = Artikel::inRandomOrder()->first();      
      return redirect()->route('detail', ["id" => $data->id]);
    }

    public function detail($id){
      $data['artikel'] = \App\Artikel::find($id);
      return view('post')->with($data);
    }

    public function search(Request $request){
      $query = $request->get('q');
      $artikel = \App\Artikel::where('judul', 'LIKE', '%' . $query . '%')->orderBy('created_at', 'desc')->paginate(6);
      // dd($query);      
      return view('home', compact('artikel', 'search'));
    }

    public function legend(){
      if ($data=\App\Artikel::get()->isEmpty())
      {
        return redirect (url('/'));
      }
      $data['artikel'] = \App\Artikel::first();
      return view('post')->with($data);        
    }

  }

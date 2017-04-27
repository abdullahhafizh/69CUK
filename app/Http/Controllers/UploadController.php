<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use Auth;

class UploadController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }
  public function index()
  {
    return view('upload');
  }

  public function save()
  {
    $this->middleware('auth');
    $a = new \App\Artikel;
    // $a->slug = str_slug(Input::get('id'));
    $a->judul = Input::get('judul');
    $a->isi = Input::get('isi');
    $a->user = Auth::user()->name;
    $a->sampul = '';
    if(Input::hasFile('sampul')){
      $sampul = date('YmdHis').uniqid().".".
      Input::file('sampul')->getClientOriginalExtension();
      Input::file('sampul')->move(storage_path()."/sampul",
        $sampul);
      $a->sampul = $sampul;
    }
    $a->save();

    return redirect(url('/'));
  }
}

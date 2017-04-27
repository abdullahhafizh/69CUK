@extends('app3')
@section('header')
<title>
 Upload 69CUK For Adult Only
</title>
@endsection
@section('content')
<div class="page-header">
  <h1 style="font-family: FontAwesome;">Upload&nbsp;<small>Submit Something Fun</small></h1>
</div>
<div class="col-md-12">
  <form class="form-horizontal" method="post" action="{{url('upload/save')}}" enctype="multipart/form-data">

    <div class="form-group">
      <label class="control-label col-sm-1" for="isi" style="font-family: FontAwesome;">Image</label>
      <div class="col-sm-3">                
        <p></p>
        <input type="file" name="sampul" required>
      </div>      
    </div>

    <div class="form-group">
      <label class="control-label col-sm-1" for="judul" style="font-family: FontAwesome;">Judul</label>
      <div class="col-sm-10">
        <input id="judul" type="text" class="form-control" name="judul" style="width: 100%; font-family: FontAwesome;" required>
        <label for="judul" style="font-family: FontAwesome;"><span><small><font color="#aaa">Deskripsi gambar</font></small></span></label>
      </div>        
    </div>

    <div class="form-group">
      <label class="control-label col-sm-1" for="isi" style="font-family: FontAwesome;">Sumber</label>
      <div class="col-sm-10">
      <input id="isi" type="text" class="form-control" name="isi" style="width: 100%; font-family: FontAwesome;" required>
      <label for="judul" style="font-family: FontAwesome;"><font color="#aaa"><span>(Recomended)<small> Hormati dan Hargai Pemilik Aslinya</small></span></font></label>
      </div>        
    </div>

    <hr>
    <div class="col-sm-2 pull-right">      
      <button type="submit" class="btn btn-inverse" style="width: 100%;">Save</button>
    </div>    

    <input type="hidden" name="_token" value="{{csrf_token()}}">    

  </form>
  <div class="col-sm-2"></div>
</div>        
<footer class="navbar-fixed-bottom">
  <div class="container-fluid">
    <small class="blur">
      <span class="text-muted pull-left" style="cursor: default;">Created by <a href="https://github.com/Hi-Fiez" target="_blank">Hi-Fiez</a>
      <span class="text-muted pull-right">Designed by <a href="https://facebook.com/abdlahafizh">Abdullah Hafizh</a></span>    </small>
    </div>
  </footer>
@endsection
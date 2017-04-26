@extends('app3')
@section('header')
<title>
 Upload 69CUK For Adult Only
</title>
@endsection
@section('content')
<div class="page-header">
  <h1>Upload&nbsp;<small>Submit Something Fun</small></h1>
</div>
<div class="col-md-12">
  <form class="form-horizontal" method="post" action="{{url('upload/save')}}" enctype="multipart/form-data">

    <div class="form-group">
      <label class="control-label col-sm-1" for="isi">Image</label>
      <div class="col-sm-3">                
        <p></p>
        <input type="file" name="sampul" required>
      </div>      
    </div>

    <div class="form-group">
      <label class="control-label col-sm-1" for="judul">Judul</label>
      <div class="col-sm-10">
        <input id="judul" type="text" class="validate" name="judul" style="width: 100%;" required>
        <label for="judul"><span><small><font color="#aaa">Deskripsi gambar</font></small></span></label>
      </div>        
    </div>

    <div class="form-group">
      <label class="control-label col-sm-1" for="isi">Sumber</label>
      <div class="col-sm-10">
      <input id="isi" type="text" class="validate" name="isi" style="width: 100%;" required>
      <label for="judul"><font color="#aaa"><span>(Recomended)<small> Hormati dan Hargai Pemilik Aslinya</small></span></font></label>
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
@endsection
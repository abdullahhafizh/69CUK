@if (Auth::guest())
<meta http-equiv="refresh" content="0; url=/entry" />
@else
@extends('app3')
@section('header')
  <title>
   Upload 69CUK For Adult Only
 </title>
 @endsection
 @section('content')
 <div class="container">
 <div class="row">
          <legend><h1><b>Upload</b></h1></legend>
          <div class="col-md-12">
            <p></p>
            <form class="form-horizontal" method="post" action="{{url('upload/save')}}" enctype="multipart/form-data">

              <div class="form-group">
                <label class="control-label col-sm-1" for="judul">Title</label>
                <div class="col-sm-10">        
                  <input id="judul" type="text" class="validate" name="judul" style="width: 100%;">          
                </div>        
              </div>

              <div class="form-group">
                <label class="control-label col-sm-1" for="isi">Content</label>
                <div class="col-sm-10">
                  <textarea id="isi" type="text" class="textarea" name="isi" style="width: 100%;"></textarea>        
                </div>        
              </div>

              <div class="form-group">
                <label class="control-label col-sm-1" for="isi">Image</label>
                <div class="col-sm-3">                
                  <p></p>
                  <input type="file" name="sampul">
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
        </div>
      </div>
      @endsection
      @endif
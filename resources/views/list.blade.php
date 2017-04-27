@extends('app3')

@section('header')
<title>69CUK For Adult Only</title>
<style type="text/css">
  .blur{
    color: #aaa;}    
    table {
      table-layout: fixed;
      white-space: normal!important;
  }

  td {
      word-wrap: break-word;
  }    
</style>     
@endsection 

@section('content')
@foreach($artikel as $data)
<div style="border-bottom:1px solid #ccc;padding-bottom:10px;padding-top:10px;">
    <table>
      <tbody>
        <tr>
          <div class="row">
            <td style="overflow-x:hidden;">
              <div class="col-md-12 image" style="width: 50%;">
                <a href="{{url('/kocak-'.$data->id)}}" title="{{ $data->judul }}"><img src="{{ url('images/'.$data->sampul) }}" width="472" max-width="472"></a>
            </div>
        </td>                    
        <td valign="top" style="display: block; width: 245px; font-family: FontAwesome;">
          <b><a href="{{url('/kocak-'.$data->id)}}" style="color: black; font-family: FontAwesome;"><h3>{{ $data->judul }}</h3></a></b>
          <div class="blur">
            <a style="display: inline; color: #aaa;" href=""><b>{{ $data->user }}</b></a>
            <abbr><small>{{ $data->created_at->diffForHumans() }}</small></abbr>
        </div>
        <div class="blur">
            <small>from {{ $data->isi }}</small>
        </div>
        <div style="margin-top: 5px;">
                <!-- <button class="btn btn-success btn-sm"><i class="fa fa-smile-o" aria-hidden="true"></i>&nbsp;Kocak</button>
                <button class="btn btn-danger btn-sm"><i class="fa fa-meh-o" aria-hidden="true"></i>&nbsp;Garing</button> -->              
            </div>                        
            <div>    
              <b><a style="color: white;" href="{{url('/kocak-'.$data->id)}}#komentar"><button class="navbar-inverse btn-sm"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp;Komentar</button></a></b>
          </div>                        
          <div style="margin-top: 5px;" class="blur">
              <small><b><span class="fb-comments-count" data-href="https://developers.facebook.com/docs/plugins/comments#{{ $data->id }}">0</span> <span>komentar</span></b></small><p></p>
          </div>                                   
          <div style="margin-top: 5px;" id="share-buttons">                
              <!-- Facebook -->
              <a href="http://www.facebook.com/sharer.php?u=http://www.hi-fiez.cf" target="_blank facebook">
                <img src="/images/facebook.png" alt="Facebook" />
            </a>
            <!-- Twitter -->
            <a href="https://twitter.com/share?url={{url('/kocak-'.$data->id)}}&amp;text=Coba lihat!!, ini lucu sekali&amp;hashtags=kocak,69CUK" target="_blank">
                <img src="images/twitter.png" alt="Twitter" />
            </a>              
            <!-- Google+ -->
            <a href="https://plus.google.com/share?url=http://www.hi-fiez.cf" target="_blank">
                <img src="/images/gplus.png" alt="Google" />
            </a>

            <!-- LinkedIn -->
            <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http://www.hi-fiez.cf" target="_blank">
                <img src="/images/linkedin.png" alt="LinkedIn" />
            </a>

            <!-- Pinterest -->
            <a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());">
                <img src="/images/pinterest.png" alt="Pinterest" />
            </a>
        </div>
    </td>
</div>
</tr>
</tbody>
</table>
</div>
@endforeach
@if(sizeof($artikel) < 6)
<p></p>
<div id="alert" onclick="alert()" class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><center>
  <strong>No Posts!!</strong> No More Post to Show...</center>
</div>
<script type="text/javascript">
  function alert() {
    document.getElementById('alert').style.display = "none";
}
</script>
@else
<div style="text-align: right; padding: 10px;">
  <a href="{{$artikel->nextPageUrl()}}" class="btn navbar-inverse" style="display:block;color:#aaa;font-size:14px;text-align:center;padding-top:10px">Lanjut lagi</a>
</div>
@endif
<footer class="navbar-fixed-bottom">
  <div class="container-fluid">
    <small class="blur">
        <span class="text-muted pull-left" style="cursor: default;">Created by <a href="https://github.com/Hi-Fiez" target="_blank">Hi-Fiez</a> & <a href="https://github.com/arm02" target="_blank">arm02</a></span>
        <span class="text-muted pull-right">Designed by <a href="https://facebook.com/abdlahafizh">Abdullah Hafizh</a></span>    </small>
    </div>
</footer>
@endsection
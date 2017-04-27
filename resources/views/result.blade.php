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

  @foreach($hasil as $data)
  <div style="border-bottom:1px solid #ccc;padding-bottom:10px;padding-top:10px;">
    <table>
      <tbody>
        <tr>
          <div class="row">
            <td style="overflow-x:hidden;">
              <div class="col-md-12 image" style="width: 50%;">
                <img src="{{ url('images/'.$data->sampul) }}" width="472" max-width="472">
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
                <button class="btn btn-success btn-sm"><i class="fa fa-smile-o" aria-hidden="true"></i>&nbsp;Kocak</button>
                <button class="btn btn-danger btn-sm"><i class="fa fa-meh-o" aria-hidden="true"></i>&nbsp;Garing</button><p></p>
                <a href="{{url('/kocak-'.$data->id)}}#komentar"><button class="btn btn-primary"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp;Komentar</button></a>
              </div>                                                    
              <div style="margin-top: 5px;" class="blur">
                <small><b><span>0 hahaha,</span>
                  <span class="fb-comments-count" data-href="https://developers.facebook.com/docs/plugins/comments#{{ $data->id }}">0</span> <span>komentar</span></b></small><p></p>
                </div>                                   
                <div style="margin-top: 5px; display: inline;">                                
                  <a class="twitter-share-button" 
                  href="https://twitter.com/share"
                  data-size="small"
                  data-text="Coba lihat!!, ini lucu sekali"
                  data-url="{{url('/kocak-'.$data->id)}}"
                  data-hashtags="kocak,69CUK"                                
                  data-related="twitterapi,twitter">                                
                </a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                <div id="fb-root"></div>
                <script>(function(d, s, id) {
                  var js, fjs = d.getElementsByTagName(s)[0];
                  if (d.getElementById(id)) return;
                  js = d.createElement(s); js.id = id;
                  js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.9";
                  fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>
                <div class="fb-share-button" data-href="http://www.hi-fiez.cf" data-layout="button" data-size="small" data-mobile-iframe="true"><a style="text-decoration: none;" class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse"></a></div>                              
              </div>
            </td>
          </div>
        </tr>
      </tbody>
    </table>
  </div>
  @endforeach
  @if(sizeof($hasil) == 0)
  <div id="alert" onclick="alert()" class="alert alert-warning alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><center>
    <strong>Oops!</strong> No Posts Found...</center>
  </div>
  <script type="text/javascript">
    function alert() {
      document.getElementById('alert').style.display = "none";
    }
  </script>
  @else
  @endif
  <footer class="navbar-fixed-bottom">
    <div class="container-fluid">
      <small class="blur">
        <span class="text-muted pull-left" style="cursor: default;">Created by <a href="https://github.com/Hi-Fiez" target="_blank">Hi-Fiez</a> & <a href="https://github.com/andynl" target="_blank">andynl</a></span>
        <span class="text-muted pull-right">Designed by <a href="https://facebook.com/abdlahafizh">Abdullah Hafizh</a></span>    </small>
      </div>
    </footer>
    @endsection
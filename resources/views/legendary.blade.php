@extends('app3')
@section('header')
<title>
{{ $artikel->judul }} - 69CUK For Adult Only
</title>
@endsection
@section('content')

<div style="border-bottom:1px solid #eee;padding-bottom:10px;padding-top:10px">
 <table width="100%" border="0">
   <tbody>
     <tr>
       <td width="100%" align="center">
         <img src="{{ url('images/'.$artikel->sampul) }}" title="" style="width: 472px;">
         <div style="background:#fff;height:23px;position:absolute;margin-top:-23px;z-index:88;width:652px"></div>
         <div style="text-align:left;padding-left:20px;padding-top:10px">
              <h3>{{ $artikel->judul }}</h3>
           <div class="">
             <a href="" style="display: inline; background: none">{{ $artikel->id_user }}</a>
             <abbr>{{ $artikel->created_at->diffForHumans() }}</abbr>
           </div>
           <div style="margin-top:5px;" class="">
             <span id="">0</span>
             <span>hahaha</span>
           </div>
         </div>
       </td>
     </tr>
   </tbody>
 </table>
</div>

<div style="" id="komentar">
  <div style="text-align:left;border-top:1px solid #ddd;font-size:13px;word-wrap:break-word">
    <div style="margin:5px">
      <h3>Komentar</h3>      
      <div style="margin-bottom:4px;">
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.9";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        <div class="fb-comments" data-width="720" data-href="https://developers.facebook.com/docs/plugins/comments#{{ $artikel->id }}" data-numposts="4"></div>
      </div>
    </div>
  </div>
</div>
@endsection

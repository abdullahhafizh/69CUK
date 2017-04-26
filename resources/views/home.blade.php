
@extends('app3')

@section('header')
<title>69CUK For Adult Only</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="">
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
                    <img src="{{ url('images/'.$data->sampul) }}" width="472" max-width="472">
                    </div> 
                </td>
                <td valign="top">
                    <b><a href="/" style="color: black;"><h3>{{ $data->judul }}</h3></a></b>
                    <div class="">
                        <a style="display: inline; color: black;" href=""><b>User</b></a>&nbsp;<abbr>{{ $data->created_at }}</abbr>
                    </div>
                    <div class="">
                        from {{ $data->isi }}
                        <p></p>
                    </div>
                    <div style="margin-top: 5px;">
                        <button class="btn btn-success"><i class="fa fa-smile-o" aria-hidden="true"></i>&nbsp;Kocak</button>
                        <button class="btn btn-danger"><i class="fa fa-meh-o" aria-hidden="true"></i>&nbsp;Garing</button><p></p>
                        <button class="btn btn-primary"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp;Komentar</button>
                    </div>
                </div>
            </div>
            <div style="margin-top: 5px;" class="">
                <span>0 hahaha,</span>
                <span>0 komentar</span>
            </div>
        </td>
        </div>
    </tr>
</tbody>
</table>
</div>
  @endforeach

  @if(sizeof($artikel) == 0)
  @else
<div style="text-align: right; padding: 10px;">
    <a href="" class="btn navbar-inverse" style="display:block;color:#aaa;font-size:14px;text-align:center;padding-top:10px">Lanjut lagi</a>
</div>
@endif
@endsection
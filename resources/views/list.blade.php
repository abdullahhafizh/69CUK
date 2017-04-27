@extends('app3')

@section('header')
<title>69CUK For Adult Only</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="">
<style type="text/css">
    .blur{
        color: #aaa;}
        table {    
            display: table;
            border-collapse: separate;
            border-spacing: 2px;
            border-color: grey;}
            td:after {
                content: ' ';
                display: block;
                visibility: hidden;
                clear: both;
                float: left;
            }
        </style>    
        @endsection 

        @section('content')
        <table class="table">
        <div style="border-bottom:1px solid #ccc;padding-bottom:10px;padding-top:10px;">
        <thread class="thead-inverse">
        <tr>
          <th>Judul</th>
          <th>Sampul</th>
          <th>Isi</th>
          <th>Create At</th>
          <th>Create By</th>
          <th colspan="2" style="text-align: center;">Action</th>
          </tr>
        </thread>

            <tbody>
        @foreach($artikel as $key)
            <tr>
            <td>{{$key->judul}}</td>
            <td><img src="{{ url('images/'.$key->sampul) }}" style="width: 50px; height: auto;"></td>
            <td>{{$key->isi}}</td>
            <td>{{$key->created_at}}</td>
            <td>{{$key->user}}</td>
            <center>
            <td>
            <a href="{{url('barang/edit/'.$key->id)}}">
            <button  class="btn btn-primary glyphicon glyphicon-edit"></button>
            </a>
            </td>
            <td>
            <a href="{{url('barang/delete/'.$key->id)}}"
            onclick="return confirm('Are you sure to delete {{$key->judul}}?')">
            <button class="btn btn-danger glyphicon glyphicon-trash"></button>
            </a>
            </td>
            </center>
            </div>
            </tr>
      @endforeach
      </div>


              </tbody>
          </table>

    @endsection
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @foreach($hasil as $data)
         <h1>{{ $data->judul }}</h1>
         <h3>{{ $data->isi }}</h1>
    @endforeach
  </body>
</html>

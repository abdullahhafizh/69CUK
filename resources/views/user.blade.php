<html>
<head>
<title>{{$users}} 69CUK For Adult Only</title>
</head>
<body>     
@foreach($users as $user)	   
<b>{{\App\User::find($user->id_user)['name']}}</b></a></h5>
@endforeach
</body>
</html>
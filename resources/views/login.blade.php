<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<ul>
@if(isset(Auth::user()->email))
<script>window.location="/main/successlogin";</script>
@endif
@if ($message=Session::get('error'))
{{$message}}
@endif
@foreach($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
</ul>
  <form action="{{url('/main/checklogin')}}" method="post">
  @csrf
  <label for="">Enter Email</label> 
  <input type="text" name="email" id=""><br>
  <label for="">Enter Password</label> <br>
  <input type="password" name="password" id="">
  <input type="submit" value="Submit" name="login">
  </form>
</body>
</html>
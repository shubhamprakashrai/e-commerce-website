@extends('master')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="{{asset('login1.css')}}">
</head>
<body>
    <h2>Login Page</h2><br>
    <div class="login">
    <form id="login" method="get" action="login.php">
        <label><b>User Name
        </b>
        </label>
        <input type="email" name="email" id="Uname" placeholder="Username">
        <br><br>
        <label><b>Password
        </b>
        </label>
        <input type="Password" name="password" id="Pass" placeholder="Password">
        <br><br>
        <button type="submit" class="btn btn-primary">Login</button>
        <br><br>
 <br><br>
    </form>
</div>
</body>
</html>
@endsection

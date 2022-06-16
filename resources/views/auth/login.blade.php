<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600&display=swap" rel="stylesheet">
</head>
<body class="body1">
    <div class="overlay"></div>
    <form action="{{route('dashboard.index')}}" method="post" class="box">
        <div class="header">
            <h4> Login To Your Account </h4>
            <p>Enter your details below to continue!</p>
            @if(session('error'))
            <p style="color:red">{{ session('error') }}</p>
            @endif
        </div>

        <div class="login-area">
            @csrf
            <input type="text" class="username" placeholder="Username" name="email"> 
            <input type="password" class="password" placeholder="Password" name="password">
            <input type="submit" value="Login" class="submit">
            
        </div>
    </form>
</body>
</html>
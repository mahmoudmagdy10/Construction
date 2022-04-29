<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my-project</title>
    <link rel="stylesheet" href="{{asset('css/auth/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/auth/login.css')}}">
    <link rel="stylesheet" href="{{asset('css/auth/normalise.css')}}">

</head>
<body>
    <div class="login">
    <h3>log in </h3>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="email">
            <i class="fa fa-lock"></i>
            <input id="email"  type="email" name="email" placeholder="enter your email" required autofocus>
        </div>
        <div class="password">
            <i class="fa fa-user"></i>    
            <input id="password" type="password" name ="password" placeholder="enter your password" required autocomplete="current-password">
        </div>

        <a href=""><input type="submit"value="log in">
        </a>
        <div class="signup">
            <h3>Sign Up</h3>
            <div class="option">
                <a href="{{route('sign_up')}}">Sign Up</a>
            </div>
        </div>
    </form>
    </div>
    <script src="{{asset('js/auth/pro.js')}}"></script>
</body>

</html>
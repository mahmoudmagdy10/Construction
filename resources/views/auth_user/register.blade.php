<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('css/auth/register.css')}}">
    <title>sighn up</title>
</head>
<body>
    <div class="container">
        <div class="sign-up-form">
            <h1>Customer</h1>
            <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="contain">
                <label for="name" value="Username">
                <input id="name" class="input-box" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4 contain">
                <label for="email" value="Email" />
                <input id="email" class="input-box" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4 contain">
                <label for="password" value="Password" />
                <input id="password" class="input-box" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4 contain">
                <label for="password_confirmation" value="Confirm Password" />
                <input id="password_confirmation" class="input-box" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
            <div class="mt-4 contain">
                <label for="address" value="Address" />
                <input id="address" class="input-box" type="text" name="address"  required autofocus autocomplete="address" />
            </div>
            <div class="mt-4 contain">
                <label for="national_id" value="National_id" />
                <input id="national_id" class="input-box" type="text" name="national_id"  required autofocus  />
            </div>              
            <div class="mt-4 contain">
                <label for="phone" value="Phone" />
                <input id="phone" class="input-box" type="text" name="phone"  required autofocus  />
            </div>                        
            <div class="mt-4 contain">
                <label for ="customer" value="Kind" />
                <input type="radio" id="customer" name="kind" value="customer">                        
            </div>
            <div class="mt-4 contain">
                <label for ="contractor" value="kind" />
                <input type="radio" id="contractor" name="kind" value="contractor">
            </div>                
            <button type="submit" class="sign-up-button">
                        Sign Up
                </button>
                <p>Have an Account? <a href="{{url('/log_in')}}"><span class=" Sign-in">Sign in</span> </a></p>
            </form>

        </div>
    </div>
    
</body>
</html>
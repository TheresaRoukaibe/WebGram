<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WebGram</title>
        <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    </head>
    <body>
       <div class= "container">

        <div class = "logo">
        <img class="img" src=" {{asset('imgs/webgram-logo.png') }}">
</div>

<form method="POST" action="login" class="login" style="text-align:center">

@csrf 
   <h1 class="title"> SIGN IN <h1>  
   @if(Session::has('fail'))
<div class="alert alert-fail">{{Session::get('fail')}}</div>
@endif
    <h1 class = "line"> </h1>
    <input class ="input" type="text" placeholder="Email..." name="email" required>
    <span class="text-danger">@error('email') {{$message}} @enderror</span>
    <input class ="input" type="password" placeholder="Password..." name="password" required>
    <span class="text-danger">@error('pass') {{$message}} @enderror</span>
    <div style="text-align:center">
    <button type="submit" name="submit" id="submit" class="button" type="button">SUBMIT</button>

</form>
<div style="text-align:center">
    <h1 class="separator" > </h1>
    <h3 class="signup">Don't have an account? <a href="/signup" class="link"> Click Me </a> to sign up! </h3>
</div> 
</div>

</div> 

        
    </body>
</html>

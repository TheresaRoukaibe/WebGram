<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WebGram Sign Up</title>


    <link rel="stylesheet" href="css/signup.css">
</head>
<body>

    <div class="main">

        <section class="signup">
           
            <div class="container">
                <div class="signup-content">
                    <div class="title">
                    <h1> REGISTER AND START SHARING </h1>
</div>
                    <form method="POST" action ="signup" id="signup-form" class="signup-form">
                        @if(Session::has('fail'))
                        <div class="alert alert-fail">{{Session::get('fail')}}</div>
                        @endif
                        @csrf
                        <div class="form-row">
                            <div class="form-group">
                                <label for="first_name">First name</label>
                                <input type="text" class="form-input" name="fname" id="fname" required/>
                                <span class="text-danger">@error('fname') {{$message}} @enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last name</label>
                                <input type="text" class="form-input" name="lname" id="lname" required/>
                                <span class="text-danger">@error('lname') {{$message}} @enderror</span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group form-icon">
                                <label for="birth_date">Birth date</label>
                                <input type="text" class="form-input" name="birthdate" id="birthdate" placeholder="MM-DD-YYYY" required/>
                                <span class="text-danger">@error('birthdate') {{$message}} @enderror</span>
                            </div>
                            <div class="form-radio">
                                <label for="gender">Gender</label>
                                <div class="form-flex">
                                    <input type="radio" name="gender" value="male" id="male" checked="checked" />
                                    <label for="male">Male</label>
    
                                    <input type="radio" name="gender" value="female" id="female" />
                                    <label for="female">Female</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone_number">Phone number</label>
                            <input type="number" class="form-input" name="phonenumber" id="phonenumber" required/>
                            <span class="text-danger">@error('phonenumber') {{$message}} @enderror</span>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="text">Email</label>
                                <input type="text" class="form-input" name="email" id="email" required/>
                                <span class="text-danger">@error('email') {{$message}} @enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-input" name="password" id="password" required/>
                                <span class="text-danger">@error('password') {{$message}} @enderror</span>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Submit"/>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>


</body>
</html>
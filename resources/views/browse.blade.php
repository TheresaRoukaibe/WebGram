<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> For You page </title>
    <link rel="stylesheet" href="{{ asset('css/browse.css') }}">
</head>

<body>
    <input type="radio" name="photos" id="check1" checked>
    <input type="radio" name="photos" id="check2" >


    <div class="container">
        <h1> What People Are Sharing </h1>
        <div class="top-content">
            <h3> Your Feed</h3>
            <label for="check2"> <a href="/profile"> Your Profile </a> </label>
        </div>

        <div class="photo-gallery">
            <div class="pic">
                <img src="imgs/webgram-logo.png" >
                <h5> This is a description </h5>

            </div>
       
       </div>
       
    </div>

    <div class="btn">
    <a href="/add_post" class="round-button">ADD</a>
</div>
</body>
</html>
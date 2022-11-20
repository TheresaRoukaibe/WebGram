<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hide Your Post</title>
    <link rel="stylesheet" href="{{ asset('css/hide.css') }}">
</head>
<body>
<div class="container">
  <form class="form" method="GET" action="{{url('/hide_from/'.$post->id)}}" >
    @csrf
      <div>
      <label for="desc"  class="file-upload-field">Enter the email of the account you wish to hide this from</label>
      <input type="text" class="file-upload-field" name="email" id="email" />
    
</div>
    
<button type="submit"  class="button" type="button">HIDE</button>
  </form>

</body>
</html>
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
            <h3> Feed</h3>
            <div class="profile">
                @csrf
            <label for="check2"> <a  href="{{url('/edit-profile/'.Session::get('id'))}}"> Edit Your Profile </a> </label>

</div>
        </div>

        
        <div class="photo-gallery">
        @php($pictures = \App\Models\Post::All())
        @php($mycomms = \App\Models\User_has_comment::All())
                @foreach ($pictures as $post)
            <div class="pic">
 
                <img src="{{asset($post->url) }}">
                <h5> {{$post->description}} </h5>
                <h1 class="border"> </h1>
            
                <div>
                <img src="imgs/like.png" style="height:30px; width:30px">
                <h6> {{$post->like_count}} <h6>
                <button type="submit" name="like" id="like" class="like-button" type="button"><a  href="{{url('/like/'.$post->id)}}"> Like </a></button>
                </div>


           <form method="GET" action="{{url('/comment/'.$post->id)}}" style="margin-top:10px">
           <input class="content" type="text" name="comment" id="comment" placeholder="Leave a comment..." />
                <button type="submit"  class="like-button" type="button">Send</button>
           </form>

@foreach ($mycomms as $comm)
           @if($post->id == $comm->post_id)
           <h2 class="comments" >{{$comm->comment}}<h2>
           @endif
           @endforeach

           @if($post->user_posted == Session::get('id'))
                <button type="submit" name="submit" id="submit" class="del" type="button"><a  href="{{url('/delete/'.$post->id)}}"> Delete my post</a></button>
                
                
                @endif
            </div>
            @endforeach
       </div>
       <div class="btn">
    <a href="/add_post" class="round-button">ADD</a>
    </div>
    </div>

    
</body>
</html>
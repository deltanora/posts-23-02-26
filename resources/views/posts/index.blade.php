<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>All posts<h1>
        <a href='/posts/create'> Make your post </a>
        @foreach($posts as $post)
        <h2>{{$post->title}}</h2>
        <p>{{$post->content}}</p>
        <a href='/posts/{{$post->id}}'>show </a>
    

         <form action='/posts/{{$post->id}}/delete' method="post">
         @csrf
         @method("DELETE")
         <input type="submit" value="delete">
        @endforeach

</body>
</html>
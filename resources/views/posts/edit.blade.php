<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit post with {{$singlePost->id}}</h1>

    <form action='/posts/{{$singlePost->id}}/update' method='post'>
        @csrf
        @method('PUT')

        <label for='title'> Title </label> <br>
        <input type="text" name='title' id = 'title' value="{{$singlePost->id}}/update"><br>
        <label for= 'content'>Content</label><br>
        <textarea id="content" name="content">{{$singlePost->author}}</textarea>

        <input type='submit' value='Atjaunot'/>
    </form>
</body>
</html>
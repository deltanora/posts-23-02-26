<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Make your posts</h1>

    <form action='/posts' method='post'>
        @csrf
        <label for='title'> Title </label> <br>
        <input type="text" name='title' id = 'title'><br>
        <label for= 'content'>Author</label><br>
        <textarea id="author" name="author"></textarea>
        <input type='submit'>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action='/posts' method='post'>
        @csrf
        <label for='title'> Title </label> <br>
        <input type="text" name='title' id = 'title'><br>
        <label for= 'content'>Content</label><br>
        <input type="text" name='content' id = 'content'><br>
        <input type='submit'>
    </form>
</body>
</html>
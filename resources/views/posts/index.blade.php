<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>All of the Posts</h1>
    <ul>
    @foreach ($posts as $post)
    <li>{{ $post->title }}</li>
    @endforeach
    </ul>
</body>
</html>
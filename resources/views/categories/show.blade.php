<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
</head>
<body>

<h1>Category</h1>
<hr>
<div>
    {{ $category->id." | ".$category->name." | ".$category->created_at }}
    <br>
    <div style="color: darkorange">
        @foreach($category->posts as $post)
            {{ $post->id." | ".$post->title." | ".$post->body." | ".$post->created_at }}
            <br>
        @endforeach
    </div>
</div>

</body>
</html>

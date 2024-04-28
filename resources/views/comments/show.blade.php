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
    {{ $comment->id." | ".$comment->name." | ".$comment->created_at }}
    <br>
    <div style="color: darkorange">
        {{ $comment->user->id." | ".$comment->user->name." | ".$comment->user->email." | ".$comment->user->created_at }}
    </div>
    <br>
    <div style="color: orangered">
        {{ $comment->post->id." | ".$comment->post->title." | ".$comment->post->body." | ".$comment->post->created_at }}
    </div>
</div>

</body>
</html>

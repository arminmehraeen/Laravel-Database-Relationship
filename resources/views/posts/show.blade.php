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

    <h1>Post</h1>
    <hr>
    <div>
        {{ $post->id." | ".$post->title." | ".$post->body." | ".$post->created_at }}

        <div style="color:#FF2D20;">
            <p>User</p>
            {{ $post->user->id." | ".$post->user->name." | ".$post->user->email." | ".$post->user->created_at }}
        </div>

        <br>


        <div style="color: darkorange">
            <p>Comments</p>
            @foreach($post->comments as $comment)
                {{ $comment->id." | ".$comment->text." | ".$comment->created_at }}
                <div style="color:#FF2D20;">
                    <p>User</p>
                    {{ $comment->user->id." | ".$comment->user->name." | ".$comment->user->email." | ".$comment->user->created_at }}
                </div>
                <br>
            @endforeach
        </div>

        <br>

        <div style="color: teal">
            <p>Categories</p>
            @foreach($post->categories as $category)
                {{ $category->id." | ".$category->name." | ".$category->created_at }}
                <br>
            @endforeach
        </div>

    </div>

</body>
</html>

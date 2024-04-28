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

    <h1>Posts</h1>
    <hr>
    @foreach($posts as $post)
        <div>
            <a  href="{{ route('posts.show',$post->id) }}">
                <div>
                    {{ $post->id." | ".$post->title." | ".$post->body." | ".$post->created_at }}
                </div>
            </a>
        </div>
    @endforeach

</body>
</html>

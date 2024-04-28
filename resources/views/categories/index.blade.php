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

<h1>Categories</h1>
<hr>
@foreach($categories as $category)
    <div>
        <a  href="{{ route('categories.show',$category->id) }}">
            <div>
                {{ $category->id." | ".$category->name." | ".$category->created_at }}
            </div>
        </a>
    </div>
@endforeach

</body>
</html
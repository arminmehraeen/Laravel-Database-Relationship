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

    <h1>Users</h1>
    <hr>
    @foreach($users as $user)
        <div>
            <a  href="{{ route('users.show',$user->id) }}">
                <div>
                    {{ $user->id." | ".$user->name." | ".$user->email." | ".$user->created_at }}
                </div>
            </a>
        </div>
    @endforeach

</body>
</html>

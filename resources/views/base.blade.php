<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind HTML File</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<!-- Header -->
<header class="bg-gray-800 text-white py-4">
    <div class="container mx-auto px-4 flex justify-between items-center">
        <!-- Title -->
        <h1 class="text-xl font-bold">Laravel</h1>
        <!-- Links -->
        <nav>
            <a href="{{ route('home') }}" class="text-gray-300 hover:text-white mr-4">Home</a>
            <a href="{{ route('users.index') }}" class="text-gray-300 hover:text-white mr-4">User</a>
            <a href="{{ route('posts.index') }}" class="text-gray-300 hover:text-white">Posts</a>
        </nav>
    </div>
</header>

@yield('main')

<!-- Footer -->
<footer class="bg-gray-800 text-white py-4 mt-8">
    <div class="container mx-auto px-4 text-center">
        <p>&copy; 2024 Tailwind HTML File. All rights reserved.</p>
    </div>
</footer>

</body>
</html>




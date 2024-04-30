@extends('base')

@section('main')

    <div class="container mx-auto px-4 py-8">

        <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
            <h2 class="text-xl font-semibold mb-4 text-gray-800">User Details</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <p class="text-gray-600 font-semibold">ID:</p>
                    <p class="text-gray-800">{{ $user->id }}</p>
                </div>
                <div>
                    <p class="text-gray-600 font-semibold">Name:</p>
                    <p class="text-gray-800">{{ $user->name }}</p>
                </div>
                <div>
                    <p class="text-gray-600 font-semibold">Email:</p>
                    <p class="text-gray-800">{{ $user->email }}</p>
                </div>
                <div>
                    <p class="text-gray-600 font-semibold">Joined at:</p>
                    <p class="text-gray-800">{{ $user->created_at->format('Y-m-d H:i:s') }}</p>
                </div>
            </div>
        </div>

        <!-- User Posts -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-xl font-semibold mb-4 text-gray-800">User Posts</h2>
            @foreach($user->posts as $post)
                <div class="bg-gray-200 rounded-lg p-4 mb-4">
                    <p class="text-gray-600 font-semibold">Post ID:</p>
                    <p class="text-gray-800">{{ $post->id }}</p>
                    <p class="text-gray-600 font-semibold">Title:</p>
                    <p class="text-gray-800">{{ $post->title }}</p>
                    <p class="text-gray-600 font-semibold">Body:</p>
                    <p class="text-gray-800">{{ $post->body }}</p>
                    <p class="text-gray-600 font-semibold">Created at:</p>
                    <p class="text-gray-800">{{ $post->created_at->format('Y-m-d H:i:s') }}</p>
                </div>
            @endforeach
        </div>
    </div>

@endsection

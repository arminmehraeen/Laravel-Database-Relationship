





@extends('base')

@section('main')

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8">
        
        <div class="mb-8">
            <h2 class="text-2xl font-bold mb-4">Post Details</h2>
            <div class="bg-white shadow-md rounded-lg p-6">
                <p class="text-gray-800"><span class="font-semibold">ID:</span> {{ $post->id }}</p>
                <p class="text-gray-800"><span class="font-semibold">Title:</span> {{ $post->title }}</p>
                <p class="text-gray-800"><span class="font-semibold">Body:</span> {{ $post->body }}</p>
                <p class="text-gray-800"><span class="font-semibold">Created At:</span> {{ $post->created_at }}</p>
            </div>
        </div>

        <!-- User Information -->
        <div class="mb-8">
            <h2 class="text-2xl font-bold mb-4">User Information</h2>
            <div class="bg-white shadow-md rounded-lg p-6">
                <p class="text-gray-800"><span class="font-semibold">ID:</span> {{ $post->user->id }}</p>
                <p class="text-gray-800"><span class="font-semibold">Name:</span> {{ $post->user->name }}</p>
                <p class="text-gray-800"><span class="font-semibold">Email:</span> {{ $post->user->email }}</p>
                <p class="text-gray-800"><span class="font-semibold">Joined At:</span> {{ $post->user->created_at }}</p>
            </div>
        </div>

        <!-- Comments -->
        <div class="mb-8">
            <h2 class="text-2xl font-bold mb-4">Comments</h2>
            @foreach($post->comments as $comment)
                <div class="bg-white shadow-md rounded-lg p-6 mb-4">
                    <p class="text-gray-800"><span class="font-semibold">ID:</span> {{ $comment->id }}</p>
                    <p class="text-gray-800"><span class="font-semibold">Text:</span> {{ $comment->text }}</p>
                    <p class="text-gray-800"><span class="font-semibold">Created At:</span> {{ $comment->created_at }}</p>
                    <div class="bg-gray-200 rounded-lg p-4 mt-4">
                        <p class="text-red-600 font-semibold"><span class="font-semibold">User Information:</span></p>
                        <p class="text-gray-800"><span class="font-semibold">ID:</span> {{ $comment->user->id }}</p>
                        <p class="text-gray-800"><span class="font-semibold">Name:</span> {{ $comment->user->name }}</p>
                        <p class="text-gray-800"><span class="font-semibold">Email:</span> {{ $comment->user->email }}</p>
                        <p class="text-gray-800"><span class="font-semibold">Joined At:</span> {{ $comment->user->created_at }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Categories -->
        <div class="mb-8">
            <h2 class="text-2xl font-bold mb-4">Categories</h2>
            @foreach($post->categories as $category)
                <div class="bg-white shadow-md rounded-lg p-6 mb-4">
                    <p class="text-gray-800"><span class="font-semibold">ID:</span> {{ $category->id }}</p>
                    <p class="text-gray-800"><span class="font-semibold">Name:</span> {{ $category->name }}</p>
                    <p class="text-gray-800"><span class="font-semibold">Created At:</span> {{ $category->created_at }}</p>
                </div>
            @endforeach
        </div>

    </div>

@endsection


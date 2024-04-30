


@extends('base')

@section('main')

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8">

        @foreach($posts as $post)
            <a href="{{ route('posts.show',$post->id) }}" class="block mb-8">
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <div class="mb-4">
                        <strong class="text-lg">{{ $post->title }}</strong>
                    </div>
                    <div class="mb-4 text-gray-700">{{ $post->body }}</div>
                    <div class="text-sm text-gray-600">{{ $post->created_at->format('Y-m-d H:i:s') }}</div>
                </div>
            </a>
        @endforeach
    </div>

@endsection

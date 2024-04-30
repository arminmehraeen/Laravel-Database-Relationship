


@extends('base')

@section('main')

    <div class="container mx-auto px-4 py-8">

        @foreach($users as $user)
            <a href="{{ route('users.show',$user->id) }}" class="block mb-8">
                <div class="bg-white rounded-lg shadow-lg p-6">
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
            </a>
        @endforeach
    </div>

@endsection


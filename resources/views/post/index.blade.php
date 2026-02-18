@extends('layouts.main')

@section('title', 'Posts')

@section('content')
    <a href="{{route('post.create')}}" class="">
        create
    </a>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

        @foreach($posts as $post)
            <div class="bg-white rounded-xl shadow p-6 hover:shadow-lg transition">

                <h2 class="text-xl font-bold text-gray-800 mb-2">
                    {{ $post->title }}
                </h2>

                <p class="text-gray-600 mb-4">
                    {{ $post->description }}
                </p>

                <div class="text-gray-700">
                    {{ $post->content }}
                </div>

                <div class="mt-4 text-right">
                    <a href="{{ route('post.one',$post->id) }}" class="text-blue-600 hover:underline transition">
                        Read more
                    </a>
                </div>

            </div>
        @endforeach

    </div>

@endsection

@extends('layouts.main')

@section('title', $post->title)

@section('content')
    <div class="max-w-3xl mx-auto bg-white rounded-xl shadow p-6 space-y-4">

        {{-- Заголовок --}}
        <h1 class="text-3xl font-bold text-gray-800">
            {{ $post->title }}
        </h1>

        {{-- Описание --}}
        <h2 class="text-xl text-gray-600">
            {{ $post->description }}
        </h2>

        {{-- Контент --}}
        <div class="text-gray-700">
            {{ $post->content }}
        </div>

        {{-- Кнопки --}}
        <div class="flex space-x-4 mt-6">
            {{-- Редактировать --}}
            <a href="{{route('post.one.edit',$post->id)}}"
                    class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                Редактировать
            </a>
            <a href="{{route('post.one.delete',$post->id)}}"
               class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                Удалит
            </a>
            {{-- Удалить --}}
{{--            <form action="{{ route('posts.destroy', $post->id) }}" method="POST"--}}
{{--                  onsubmit="return confirm('Вы уверены, что хотите удалить этот пост?');">--}}
{{--                @csrf--}}
{{--                @method('DELETE')--}}
{{--                <button type="submit"--}}
{{--                        class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 transition">--}}
{{--                    Удалить--}}
{{--                </button>--}}
{{--            </form>--}}
        </div>

    </div>
@endsection


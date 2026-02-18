@extends('layouts.main')

@section('title', 'Редактировать пост')

@section('content')
    <div class="max-w-3xl mx-auto bg-white rounded-xl shadow p-8">

        <h1 class="text-2xl font-bold text-gray-800 mb-6">
            Редактировать пост
        </h1>

        <form action="{{ route('post.save') }}" method="POST" class="space-y-6">
            @csrf
            @method('POST')

            {{-- Заголовок --}}
            <div>
                <label for="title" class="block text-gray-700 font-semibold mb-2">Заголовок</label>
                <input type="text" id="title" name="title"
                       class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                       required>
                @error('title')
                <p class="text-red-500 mt-1 text-sm">{{ $message }}</p>
                @enderror
            </div>

            {{-- Описание --}}
            <div>
                <label for="description" class="block text-gray-700 font-semibold mb-2">Описание</label>
                <input type="text" id="description" name="description"
                       class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                       required>
                @error('description')
                <p class="text-red-500 mt-1 text-sm">{{ $message }}</p>
                @enderror
            </div>

            {{-- Контент --}}
            <div>
                <label for="content" class="block text-gray-700 font-semibold mb-2">Контент</label>
                <textarea id="content" name="content" rows="6"
                          class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                          required></textarea>
                @error('content')
                <p class="text-red-500 mt-1 text-sm">{{ $message }}</p>
                @enderror
            </div>

            {{-- Кнопки --}}
            <div class="flex space-x-4">
                <button type="submit"
                        class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                    Сохранить
                </button>
                <a href="{{ route('posts')}}"
                   class="px-6 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400 transition">
                    Отмена
                </a>
            </div>

        </form>
    </div>
@endsection

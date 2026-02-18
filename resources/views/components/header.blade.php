<header class="bg-white shadow-md border-b">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

        {{-- Logo --}}
        <h1 class="text-lg font-semibold text-gray-800">
            Admin Panel
        </h1>

        {{-- Navigation --}}
        <nav class="flex items-center space-x-6">
            <a href="{{ route('home') }}" class="text-gray-600 hover:text-blue-600 transition">
                Home
            </a>
            <a href="{{ route('posts') }}" class="text-gray-600 hover:text-blue-600 transition">
                Posts
            </a>
            <a href="{{ route('home') }}" class="text-gray-600 hover:text-blue-600 transition">
                Home
            </a>

            <form method="POST" action="#">
                @csrf
                <button class="text-red-500 hover:text-red-700 transition">
                    Logout
                </button>
            </form>
        </nav>

    </div>
</header>

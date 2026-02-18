<div class="max-w-3xl mx-auto my-2">
    <div class="group relative flex items-center p-4 bg-white border border-gray-200 rounded-lg hover:border-blue-400 hover:shadow-sm transition-all duration-200">

        <div class="absolute left-0 top-0 bottom-0 w-1 bg-blue-500 rounded-l-lg opacity-0 group-hover:opacity-100 transition-opacity"></div>

        <div class="flex-1 ml-2">
            <h2 class="text-lg font-medium text-gray-800 group-hover:text-blue-600 transition-colors">
                {{ $post->title }}
            </h2>
        </div>

        <div class="ml-4 text-gray-400 group-hover:text-blue-500 transform translate-x-0 group-hover:translate-x-1 transition-all">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="9 5l7 7-7 7" />
            </svg>
        </div>
    </div>
</div>

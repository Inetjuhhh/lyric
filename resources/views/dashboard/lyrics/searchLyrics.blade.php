<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-400">
                    <h2 class="text-2xl">All results of songs with {{$queryInput}}</h2>
                    <div id="song"><div class="lds-heart"></div></div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('api.js')}}"></script>
    <script>
        doApiSearch('{{ $queryInput }}');
    </script>
</x-app-layout>

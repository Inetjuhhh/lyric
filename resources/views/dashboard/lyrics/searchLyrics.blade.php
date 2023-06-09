<x-app-layout>
    <x-slot name="head">
        <meta name="my_api_route" content="{{ route('doApiSearch') }}" />
        <meta name="add_lyric" content="{{route('userLyrics.store')}}">
        <meta name="csrf_token" content="{{ csrf_token() }}">
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-400">
                    <h2 class="text-2xl">All results of songs with {{$queryInput}}</h2>
                    <x-status-message></x-status-message>
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

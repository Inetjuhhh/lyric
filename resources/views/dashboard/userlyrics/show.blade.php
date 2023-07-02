<x-app-layout>
    <div class="container mx-auto max-w-7xl mx-auto sm:px-6 lg:px-8 py-12 border-gray-300 ">
        <x-status-message></x-status-message>
        <h2 class="text-3xl bg-slate-400 p-6 rounded">{{$userLyric->full_title }}</h2>
        <p class="bg-slate-200">{{$userLyric->lyrics}}</p>
    </div>
</x-app-layout>

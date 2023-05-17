<x-app-layout>
    <div class="container mx-auto">
        @if(session('status'))
            <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3">
                <p class="font-bold text-sm">{{ session('status') }}</p>
            </div>
        @endif
        <h2 class="my-10 ml-3 text-3xl">{{$userLyric->lyric->artist}} - {{$userLyric->lyric->song}}</h2>

                <p>{{$userLyric->lyric->lyrics}}</p>





    </div>
</x-app-layout>

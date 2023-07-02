<x-app-layout>
    <div class="container mx-auto">
        <h2 class="my-10 ml-3 text-3xl">Lyric list of {{Auth::user()->name}}</h2>
        @if(session('status'))
            <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3">
                <p class="font-bold text-sm">{{ session('status') }}</p>
            </div>
        @endif
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="container mx-auto text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="w-4 p-4 text-l text-blue uppercase bg-blue-600 dark:text-white">
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="col" class="px-6 py-3">Artist</th>
                        <th scope="col" class="px-6 py-3">Song</th>
                        <th scope="col" class="px-6 py-3">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($userLyrics as $userLyric)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="w-4 p-4"><a class="hover:text-red-700" href="{{route('userLyrics.show', $userLyric->id)}}">{{$userLyric->full_title}}</a></td>
                                <td class="w-4 p-4"><a class="hover:text-red-700" href="{{route('userLyrics.show', $userLyric->id)}}">{{$userLyric->lyrics}}</a></td>
                                <td class="w-4 p-4">
                                    <form action="{{ route('userLyrics.destroy', $userLyric->id) }} " method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="-" class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                    </form>


                                </td>
                            </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>

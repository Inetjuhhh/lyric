<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 container mx-auto py-12">
        <h2 class="my-10 ml-3 text-3xl">Lyric list of {{Auth::user()->name}}</h2>
        <x-status-message></x-status-message>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table id="dragTable" class="border-collapse container mx-auto text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="w-4 p-4 text-l text-blue uppercase bg-blue-600 dark:text-white">
                    <tr class="bg-slate-600 text-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="col" class="px-6 py-3">Artist</th>
                        <th scope="col" class="px-6 py-3">Delete</th>
                    </tr>
                </thead>
                <tbody class="[&>*:nth-child(even)]:bg-gray-100 [&>*:nth-child(odd)]:bg-gray-300 hover:bg-slate-700">
                    @foreach($userLyrics as $userLyric)
                            <tr draggable="true" class="cursor-move border-black border-1 bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-slate-50 ">
                                <td class="w-4 p-4"><a class="" href="{{route('userLyrics.show', $userLyric->id)}}">{{$userLyric->full_title}}</a></td>
                                <td class="w-4 p-4">
                                    <form action="{{ route('userLyrics.destroy', $userLyric->id) }} " method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="-" class="bg-red-300 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                    </form>


                                </td>
                            </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
<script src="{{asset('move.js')}}"></script>

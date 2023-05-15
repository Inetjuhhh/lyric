<header>
  <nav>
    <div class="">
      <div class="flex justify-between h-16 px-10 shadow items-center">
        <div class="flex items-center space-x-8">
          <h1 class="text-xl lg:text-2xl font-bold cursor-pointer">LyricApp</h1>
          <div class="hidden md:flex justify-around space-x-4">
            <a href="#" class="hover:text-indigo-600 text-gray-700">My lyric list</a>
            <a href="#" class="hover:text-indigo-600 text-gray-700">Lyric Search Add</a>
            <a href="#" class="hover:text-indigo-600 text-gray-700">Contact</a>
          </div>
        </div>
        @if (Route::has('login'))
          <div class="flex space-x-4 items-center">
            @auth
              <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            @else
              <a href="{{ route('login') }}" class="text-gray-800 text-sm">LOGIN</a>
              
              @if (Route::has('register'))
                <a href="{{ route('register') }}#" class="bg-indigo-600 px-4 py-2 rounded text-white hover:bg-indigo-500 text-sm">SIGNUP</a>
              @endif
            @endauth
          </div>    
        @endif
      </div>
    </div>
  </nav>


</header>
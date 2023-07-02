@if(session()->has('status'))
    <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3">
        <p class="font-bold text-sm">{{ session('status') }}</p>
    </div>
@endif

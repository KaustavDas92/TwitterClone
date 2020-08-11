<div class=" border border-blue-400 rounded-lg px-8 py-6 mb-4">
    <form method="POST" action="/tweets">
        @csrf
        <textarea
            name="body"
            class="w-full p-4"
            placeholder="Whats up doc??"
           >
                </textarea>
        <hr class="my-3">
        <footer class="flex justify-between">
            <img src="{{auth()->user()->avatar}}"
                 alt="Your Avatar"
                 class="rounded-full mr-4"
                 width="50" height="50">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 rounded-lg shadow px-4 py-2 text-white ">
                Tweet a roo!!
            </button>
        </footer>
    </form>

    @error('body')
        <p class="text-red-600 text-sm mt-2">{{$message}}</p>
    @enderror
</div>

@if(current_user()->isNot($user))
    <form method="POST" action="{{$user->path()}}/follow">
        @csrf
        <button type="submit" class="bg-blue-500 rounded-full shadow px-4 py-2 text-white ">
            {{ current_user()->following($user)? 'Unfollow me':'Follow me' }}
        </button>
    </form>

@endif


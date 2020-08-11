<div class="bg-gray-200 border border-gray-200 rounded-lg px-4 py-2">
    <h3 class="font-bold text-xl mb-4">Following</h3>
    <ul>
        @forelse(current_user()->follows as $user)
            <li class="{{$loop->last?'':'mb-4'}}">
                <div >
                    <a href="{{route('profile',$user)}}" class="flex items-center text-sm">
                        <img src="{{$user->avatar}}"
                             alt="friend's Avatar"
                             class="rounded-full mr-4"
                             width="50" height="50">
                        {{$user->name}}
                    </a>

                </div>
            </li>
        @empty
            <p class="p-4">No Friends Yet</p>
        @endforelse
    </ul>
</div>


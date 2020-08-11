<x-app>
    <div class="lg:flex-1 lg:mx-10" style="width: 700px">

        @foreach($users as $user)
            <a href="{{$user->path()}}" class="flex items-center mb-5">
                <img src="{{$user->avatar}}"
                     alt="Your Avatar"
                     class="rounded-full mr-4"
                     width="50" height="50">
                <div>
                    <h4 class="font-bold ">{{'@'.$user->name}}</h4>
                </div>
            </a>

        @endforeach

    </div>
</x-app>

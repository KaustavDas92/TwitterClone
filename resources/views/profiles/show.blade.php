<x-app>


    <div class="lg:flex-1 lg:mx-10" style="width: 900px">
        <header class="mb-6 relative">
           <div class="relative">
               <img src="/images/cover.jpg"
                    alt="Cover Picture"
                    class="mb-2"
                    width="900"
               >
               <img src="{{$user->avatar}}"
                    alt="Your Avatar"
                    class="rounded-full mr-4 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                    style="width: 150px; left: 50%">
           </div>


            <div class="flex justify-between items-center" >
                <div style="max-width: 250px">
                    <h2 class="font-bold text-2xl">{{$user->name}}</h2>
                    <p class="text-sm">{{$user->created_at->diffForHumans()}}</p>
                </div>

                <div class="flex">
                    @can('edit',$user)
                        <a href="{{$user->path('edit')}}" class="rounded-full shadow px-4 py-2 text-black ">
                            Edit Profile
                        </a>
                    @endcan


                    <x-follow-btn :user="$user"></x-follow-btn>

                </div>
            </div>

            <p class="text-sm pt-3">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                publishing software like Aldus PageMaker including versions of Lorem Ipsum
            </p>
        </header>

        <hr>
        @include('timeline', ['tweets'=>$tweets])
    </div>
</x-app>

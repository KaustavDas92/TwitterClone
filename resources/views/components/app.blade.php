<x-master>
    <section class="px-8">
        <main class="container mx-auto">
            <div class="lg:flex lg:justify-between">
                @auth()
                    <div class="lg:w-32">
                        @include('sidebar_links')
                    </div>
                @endauth

                {{$slot}}

                @auth()
                    <div class="lg:w-1/6 bg-blue-100 rounded-lg px-4">
                        @include('friends_list')
                    </div>
                @endauth
            </div>
        </main>
    </section>

</x-master>

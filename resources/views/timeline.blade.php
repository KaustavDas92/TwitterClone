<div class="border border-gray-500 rounded-lg">
    @forelse($tweets as $tweet)
        @include('tweet')
    @empty
        <p class="p-4">No Tweets to show</p>
    @endforelse

  {{$tweets->links('pagination::tailwind')}}
</div>

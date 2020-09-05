<x-app>
    @section('content')

        @include('layouts.home.TweetBox')
        <div class="time-line mt-6">
            @forelse($tweets as $tweet)
                @include('layouts.Tweet.Tweet')
            @empty
                <p>No tweet yet</p>
            @endforelse
        </div>

    @endsection

</x-app>


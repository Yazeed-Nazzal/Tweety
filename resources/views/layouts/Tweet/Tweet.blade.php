
    <div class="tweet flex mb-4 border-b border-gray-400 pb-10">
        <div class=" avatar ml-1 mr-4">
            <div class="tweet-img" style="background-image: url('/storage/{{$tweet->user->avatar}}');">
            </div>

        </div>
        <div class="tweet-inf">
            <a href="/profile/{{   $tweet->user->username }}"> <h5 class="font-bold text-xl capitalize">{{ $tweet->user->name }}</h5></a>
            <p>{{ $tweet->body }}</p>
            <footer class="mt-5 text-gray-500 flex" >
                <form method="post" action="/tweets/{{ $tweet->id}}/like">
                    @csrf
                    <button type="submit"><i class="fas fa-thumbs-up {{ $tweet->isLikedBy(auth()->user()) ? ' text-blue-500':'text-gray-500' }}"></i></button>
                    <span class="mr-5">{{ $tweet->likeo ?$tweet->likeo:0 }}</span>
                </form>
                <form method="post" action="/tweets/{{ $tweet->id}}/like">
                    @csrf
                    @method('DELETE')
                    <button type="submit"> <i class="fas fa-thumbs-down {{ $tweet->isDislikedBy(auth()->user()) ? ' text-blue-500':'text-gray-500' }}"></i></button>
                    <span>{{$tweet->dislikes ?$tweet->dislikes:0}}</span>

                </form>


            </footer>
        </div>

    </div>



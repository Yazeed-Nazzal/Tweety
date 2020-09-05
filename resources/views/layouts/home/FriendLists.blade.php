<h2 class="mb-3 font-bold text-2xl text-black">Following</h2>
<ul class="text-black">
  @forelse(auth()->user()->follows as $follower)
        <li class="mb-3">
            <div class="flex items-center ">
                <img src="{{$follower->getAvatar($follower->avatar)}}"
                     style="max-width: 100px;max-height: 100px"
                     class="rounded-full mr-1 friend-img"
                     alt="avatar">
                <a href="{{ route('profile',$follower->username) }}"><span class="text-lg">{{ $follower->name }}</span></a>
            </div>
        </li>
    @empty
      <p class="text-capitalize">No Friend yet</p>
    @endforelse
      <h2 class="mb-3 font-bold text-2xl text-black">Followers</h2>
    @foreach(auth()->user()->followers as $follower)
          <li class="mb-3">
              <div class="flex items-center ">
                  <img src="{{$follower->getAvatar($follower->avatar)}}"
                       style="max-width: 100px;max-height: 100px"
                       class="rounded-full mr-1 friend-img"
                       alt="avatar">
                  <a href="{{ route('profile',$follower->username) }}"><span class="text-lg">{{ $follower->name }}</span></a>
              </div>
          </li>
      @endforeach
</ul>

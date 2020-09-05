@if (auth()->user()->isnot($user))
<form  method="post" action="/profile/{{ $user->username}}/follow"  class="follow-form">
    @csrf
    <button
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full  mr-2">
        {{ auth()->user()->following($user)? "Unfollow ME" : "Follow ME" }}
    </button>
</form>
@endif


@can('edit',$user)
    <form action="/profile/edit/{{ $user->username}}">
        <button
            class="bg-gray-200 hover:bg-blue-500 hover:text-white text-black font-bold py-2 px-4 rounded-full  "
            type="submit">
          Edit Profile
        </button>
    </form>
@endcan


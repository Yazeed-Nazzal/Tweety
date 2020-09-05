@extends('components.app')
@section('content')
    @foreach($users as $user)
        <div class="flex items-center Explore-List border-solid border-b border-gray-600 py-6 ">
            <div class="User-Explore-Img" style="background-image: url('storage/{{$user->avatar}}')"></div>
            <h3 class="font-bold text-xl ml-6"><a href="/profile/{{$user->username}}"> {{'@'.$user->username}}</a></h3>
        </div>



    @endforeach
@stop

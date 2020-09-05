@extends('components.app')
@section('content')
    <header class="profile-header mb-8">
        <div class="cover-img "></div>
        <div class="profile-img rounded-full" style="background-image: url('{{ asset('storage').'/'. $user->avatar}}')">
        </div>
        <div class="flex justify-between my-5">
            <div>
                <h1 class="text-xl font-bold text-2xl" style="max-width: 200px">{{$user->name}}</h1>
                <p>MR.Nazzal</p>
            </div>

            <div>
                @include('layouts.Profile.FollowForm')
                @include('layouts.Profile.EditForm')
            </div>
        </div>
        <div class="profile-description">
            <p class="text-lg text-center ">{{ $user->status }}</p>
        </div>
    </header>

<div class="time-line">
    @forelse($tweets as $tweet)
        @include('layouts.Tweet.Tweet')
    @empty
        <p>No tweet yet</p>
    @endforelse
    {{$tweets->links()}}
</div>
@stop


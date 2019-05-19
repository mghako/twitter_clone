@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
    <div class="col-3">
        <img src="{{ $user->profile->profileImage() }}" alt="" class="img-fluid">
    </div>
    <div class="col-9">
        <div class="d-flex justify-content-between align-items-baseline">
            <div class="d-flex align-items-center pb-4">
                <div class="h3 mr-4">{{ $user->username}}</div>
                <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
            </div>
        @can('update', $user->profile)
        <a href="/p/create">Add Post</a>
       @endcan
        </div>
        @can('update', $user->profile)
        <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
        @endcan
        <div class="d-flex flex-row">
            <div class="pr-5"> <em><u><strong>{{ $postCount }}</strong></u></em> posts</div>
            <div class="pr-5"> <em><u><strong>{{ $followersCount }}</strong></u></em> follower</div>
            <div class="pr-5"> <em><u><strong>{{ $followingCount }}</strong></u></em> following</div>
        </div>
        <div class="pt-4 font-weight-bold"> {{ $user->profile->title ?? "Fill title here"}} </div>
        <div>{{ $user->profile->description ?? "Hey put some description" }}</div>
        <div><a href="#">{{ $user->profile->url ?? "www.profile.com" }}</a></div>
    </div>
   </div>

   <!-- photos album sec -->
   <div class="row">
      @foreach($user->posts as $post)
        <div class="col-3">
            <a href="/p/{{ $post->id }}"><img src="/storage/{{ $post->image }}" alt="" class="w-100 py-5 img-responsive"></a>
        </div> 
      @endforeach
   </div>
</div>
@endsection

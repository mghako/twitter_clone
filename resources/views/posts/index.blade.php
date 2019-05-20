@extends('layouts.app')

@section('content')

<div class="container">
   @foreach($posts as $post)
   <div class="row">
        <div class="col-6 offset-4">
            <a href="/profile/{{ $post->user->id }}">
            <img src="/storage/{{ $post->image }}" alt="Post Image" class="w-100 py-3 image-responsive" style="max-width: 600px; max-height: 400px;">
            </a>
        </div>
    </div>
    <div class="row pt-2 pb-5">
        <div class="col-6 offset-4">
            <div>
                <div><span class="font-weight-bold"><span class="text-dark">View Profile : <a href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a></span></span></div>
            </div>
        </div>
    </div>
   @endforeach
   <div class="row">
    <div class="col-12 d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
   </div>
</div>

@endsection
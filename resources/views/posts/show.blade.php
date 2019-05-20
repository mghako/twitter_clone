@extends('layouts.app')

@section('content')

<div class="container">
   <div class="row">
    <div class="col-8">
        <img src="/storage/{{ $post->image }}" alt="Post Image" class="w-100 py-3 image-responsive" style="max-width: 550px;">
    </div>
    <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div>
                        <img src="{{ $post->user->profile->profileImage() }}" alt="" class="w-100 rounded-circle" style="max-width: 75px;">
                    </div>
                    <div>
                        <p class="font-weight-bold pl-3">
                            <a href="/profile/{{ $post->user->id }}">
                                <span class="text-dark">{{ $post->user->username }}</span>
                            </a> |
                            <a href="#" class="btn btn-info">Follow</a>
                        </p>
                    </div>
                </div>
                <hr>
                <div><span class="font-weight-bold"><span class="text-dark">{{ $post->user->username }}</span></span></div>
                <div>
                    <div class="h3">Description</div>
                    
                    <p class="">{{ $post->caption }}</p>
                </div>
            </div>
    </div>
   </div>
</div>

@endsection
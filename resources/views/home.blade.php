@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
    <div class="col-3">
        <img src="{{ asset('img/megumi_logo.png') }}" alt="" class="img-fluid">
    </div>
    <div class="col-9">
        <div class="d-flex justify-content-between align-items-baseline"><h1>{{ $user->username}}</h1><a href="#">Add Post</a></div>
        <div class="d-flex flex-row">
            <div class="pr-5"> <em><u><strong>153</strong></u></em> posts</div>
            <div class="pr-5"> <em><u><strong>23K</strong></u></em> follower</div>
            <div class="pr-5"> <em><u><strong>212</strong></u></em> following</div>
        </div>
        <div class="pt-4 font-weight-bold"> {{ $user->profile->title}} </div>
        <div>{{ $user->profile->description }}</div>
        <div><a href="#">{{ $user->profile->url ?? N/A }}</a></div>
    </div>
   </div>

   <!-- photos album sec -->
   <div class="row">
    <div class="col-4">
        <img src="{{ asset('img/megumi_1.png') }}" alt="" class="w-100 pt-5 img-responsive">
    </div>
    <div class="col-4">
        <img src="{{ asset('img/megumi_2.png') }}" alt="" class="w-100 pt-5 img-responsive">
    </div>
    <div class="col-4">
        <img src="{{ asset('img/megumi_3.png') }}" alt="" class="w-100 pt-5 img-responsive">
    </div>
   </div>
</div>
@endsection

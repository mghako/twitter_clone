<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
    public function index(User $user)
    {
        // $user = User::findOrFail($user);

        $follows = (auth()->user()) ? auth()->user()->following->contains($user->id) : false;
        $postCount = $user->posts->count();
        $followersCount = $user->profile->followers->count();
        $followingCount = $user->following->count();
        

        // dd($follows);
        return view('profiles.index', compact('user','follows', 'postCount','followersCount', 'followingCount'));
    }

    public function edit(User $user) {

        $this->authorize('update', $user->profile);
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user) {

        $this->authorize('update', $user->profile);

        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => ''
        ]);

       
       if(request('image')) {
        $imagePath = request('image')->store('profile', 'public');
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        $image->save();
        $imageAarray = ['image' => $imagePath];
       }
    //    dd(array_merge(
    //        $data,
    //        ['image' => $imagePath]
    //    ));
        
       auth()->user()->profile->update(array_merge(
           $data,
           $imageAarray ?? []
       ));
       return redirect("/profile/{$user->id}");
    }
}
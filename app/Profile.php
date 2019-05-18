<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    
    protected $guarded = [];
    
    public function profileImage() {
        $imagePath = ($this->image) ? $this->image : 'profile/WD80rR8u5XByq6lrahCafuk9IF0GotXhIdhmraIr.png';
        return '/storage/'. $imagePath;
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}

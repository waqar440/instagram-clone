<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage(){
        return $this->image?$this->image:'profile/s7L3We2sOH3QeWWVCv7lAJklzZzN0605lHZzEciW.jpg';
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function followers(){
       return $this->belongsToMany(User::class);
    }
}

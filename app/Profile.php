<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function users() {
        //A Profile belongs to a User
        return $this->belongsTo(User::class);

    }
}

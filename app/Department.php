<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Department extends Model
{
    use Searchable;

    public function users() {
        //A Department has many Users
        return $this->hasMany(User::class);

    }
}

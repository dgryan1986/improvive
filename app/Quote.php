<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Quote extends Model
{
    use Searchable;
    
    public function users() {
        //A Quote belongs to a User
        return $this->belongsTo(User::class);

    }

    public function teams() {
        //A Quote belongs to a Team
        return $this->belongsTo(Team::class);
    }

    public function customer() {
        //A Quote belongs to a Customer
        return $this->belongsTo(Customer::class);

    }

    public function locations() {
        //A Quote belongs to a Location
        return $this->belongsTo(Location::class);

    }

    public function projects() {
        //A Quote belongs to a Project
        return $this->belongsTo(Project::class);

    }

    public function tags() {
        //A Quote has many Tags
        //Goal here is to provide the ability to add keywords to quotes for quick referencing
        return $this->hasMany(Tag::class);

    }
}

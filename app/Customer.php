<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Customer extends Model
{
    use Searchable;
    
    public function users() {

        return $this->belongsToMany(User::class);

    }

    public function projects() {

        return $this->hasMany(Project::class);

    }

    public function workOrders() {

        return $this->hasMany(WorkOrder::class);

    }

    public function tasks() {

        return $this->hasMany(Task::class);
    }

    public function locations() {

        return $this->hasMany(Location::class);

    }

    public function quotes() {

        return $this->hasMany(Quote::class);
        
    }

    public function teams() {

        return $this->belongsToMany(Team::class);
    }
}

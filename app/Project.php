<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Project extends Model
{
    use Searchable;
    
    public function users() {
        //A Project belongs to a User
        return $this->belongsTo(User::class);
    
    }

    public function tasks() {

        return $this->hasMany(Task::class);

    }

    public function locations() {

        return $this->belongsTo(Location::class);

    }

    public function quotes() {

        return $this->belongsTo(Quote::class);

    }

    public function customers() {
        
        return $this->belongsTo(Customer::class); 
    }

    public function tags() {

        return $this->belongsToMany(Tag::class);
        
    }

    public function statuses() {

        return $this->hasOne(Status::class);
    }

    public function workOrders() {

        return $this->hasMany(WorkOrder::class);

    }
}

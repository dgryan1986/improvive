<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Asset extends Model
{
    use Searchable; 

    public function locations() {
        
        return $this->belongsTo(Location::class);

    }

    public function users() {
        //An Asset belongs to many Users
        return $this->belongsToMany(User::class);

    }

    public function customers() {

        return $this->belongsToMany(Customer::class);

    }

    public function employees() {

        return $this->belongsToMany(Employee::class);

    }

    public function statuses() {

        return $this->hasOne(Status::class);
        
    }

    
}

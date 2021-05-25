<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Location extends Model
{
    use Searchable;

    public function users() {

        return $this->belongsToMany(User::class);

    }

    public function projects() {

        return $this->hasMany(Project::class);

    }

    public function customers() {

        return $this->belongsToMany(Customer::class);

    }

    public function assets() {
        
        return $this->hasMany(Asset::class);

    }

    public function workOrders() {

        return $this->hasMany(WorkOrder::class);

    }
}

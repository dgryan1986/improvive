<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Employee extends Model
{
    use Searchable;

    public function users() {
        //An Employee belongs to a User
        return $this->belongsTo(User::class);

    }

    public function projects() {
        //An Employee has many Projects
        return $this->hasMany(Project::class);

    }

    public function locations() {
        //An Employee has many Properties
        return $this->hasMany(Location::class);

    }

    public function tasks() {
        //An Employee has many Task
        return $this->hasMany(Task::class);

    }

    public function workOrders() {
        //An Employee has many Work Orders
        return $this->hasMany(WorkOrder::class);
        
    }

    public function timecards() {

        return $this->hasMany(Timecard::class);
        
    }
}

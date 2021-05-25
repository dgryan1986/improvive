<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Timesheet extends Model
{
    use Searchable;
    
    public function users() {

        return $this->belongsToMany(User::class);

    }

    public function employees() {

        return $this->belongsToMany(Employee::class);

    }

    public function projects() {

        return $this->hasMany(Project::class);

    }

    public function workOrders() {

        return $this->hasMany(WorkOrder::class);

    }
}

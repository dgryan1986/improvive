<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Task extends Model
{
    use Searchable;
    
    public function users() {
        //A Task belongs to a User
        return $this->belongsToMany(User::class);

    }

    public function projects() {
        //A Task belongs to a Project
        return $this->belongsTo(Project::class);

    }

    public function employees() {
        //A Task belongs to many Employees
        return $this->belongsTo(Employee::class);

    }

    public function customers() {
        //A Task belongs to a Customer
        return $this->belongsTo(Customer::class);
        
    }

    public function teams() {
        //A Task belongs to a Team
        return $this->belongsTo(Team::class);

    }

    public function workOrders() {
        //A Task belongs to a Team
        return $this->belongsTo(WorkOrder::class);

    }
}

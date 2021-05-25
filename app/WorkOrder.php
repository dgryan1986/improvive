<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class WorkOrder extends Model
{
    use Searchable;
    
    public function user() {

        return $this->hasMany(User::class);
        
    }
    
    public function tasks() {

        return $this->hasMany(Task::class);

    }

    public function projects() {

        return $this->belongsTo(Project::class);

    }

    public function customers() {

        return $this->belongsTo(Customer::class);

    }

    public function locations() {

        return $this->belongsTo(Location::class);

    }

    public function statuses() {
        
        return $this->hasOne(Status::class);

    }

    public function timesheets() {

        return $this->hasMany(Timesheet::class);

    }

    public function quotes() {

        return $this->belongsTo(Quote::class);

    }

    public function assets() {

        return $this->hasMany(Asset::class);

    }

    public function vendors() {

        return $this->hasMany(Vendor::class);

    }

    
}

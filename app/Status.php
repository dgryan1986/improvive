<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Status extends Model
{
    use Searchable;

    public function projects() {

        return $this->belongsTo(Project::class);

    }

    public function assets() {

        return $this->belongsTo(Asset::class);

    }

    public function workorders() {

        return $this->belongsTo(Workorder::class);

    }
}
